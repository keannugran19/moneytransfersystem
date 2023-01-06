<?php

require_once("pdoDB.php");

class sendConfig
{
    private $transaction_code;
    private $sender_fname;
    private $sender_lname;
    private $sender_phone;
    private $sender_address;
    private $receiver_fname;
    private $receiver_lname;
    private $receiver_phone;
    private $receiver_address;
    private $amount;
    private $remarks;
    protected $dbconn;

    public function __construct(
        $transaction_code = 0,
        $sender_fname = "",
        $sender_lname = "",
        $sender_phone = "",
        $sender_address = "",
        $receiver_fname = "",
        $receiver_lname = "",
        $receiver_phone = "",
        $receiver_address = "",
        $amount = "",
        $remarks = ""
    ) {
        $this->transaction_code = $transaction_code;
        $this->sender_fname = $sender_fname;
        $this->sender_lname = $sender_lname;
        $this->sender_phone = $sender_phone;
        $this->sender_address = $sender_address;
        $this->receiver_fname = $receiver_fname;
        $this->receiver_lname = $receiver_lname;
        $this->receiver_phone = $receiver_phone;
        $this->receiver_address = $receiver_address;
        $this->amount = $amount;
        $this->remarks = $remarks;

        $this->dbconn = new PDO(DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function setCode($transaction_code)
    {
        $this->transaction_code = $transaction_code;
    }

    public function getCode()
    {
        return $this->transaction_code;
    }

    public function setSender_fname($sender_fname)
    {
        $this->sender_fname = $sender_fname;
    }

    public function getSender_fname()
    {
        return $this->sender_fname;
    }

    public function setSender_lname($sender_lname)
    {
        $this->sender_lname = $sender_lname;
    }

    public function getSender_lname()
    {
        return $this->sender_lname;
    }

    public function setSender_phone($sender_phone)
    {
        $this->sender_phone = $sender_phone;
    }

    public function getSender_phone()
    {
        return $this->sender_phone;
    }

    public function setSender_address($sender_address)
    {
        $this->sender_address = $sender_address;
    }

    public function getSender_address()
    {
        return $this->sender_address;
    }

    public function setReceiver_fname($receiver_fname)
    {
        $this->receiver_fname = $receiver_fname;
    }

    public function getReceiver_fname()
    {
        return $this->receiver_fname;
    }

    public function setReceiver_lname($receiver_lname)
    {
        $this->receiver_lname = $receiver_lname;
    }

    public function getReceiver_lname()
    {
        return $this->receiver_lname;
    }

    public function setReceiver_phone($receiver_phone)
    {
        $this->receiver_phone = $receiver_phone;
    }

    public function getReceiver_phone()
    {
        return $this->receiver_phone;
    }

    public function setReceiver_address($receiver_address)
    {
        $this->receiver_address = $receiver_address;
    }

    public function getReceiver_address()
    {
        return $this->receiver_address;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
    }

    public function getRemarks()
    {
        return $this->remarks;
    }

    public function insertData()
    {
        try {
            $stm = $this->dbconn->prepare("INSERT INTO transfer(
                sender_fname,
                sender_lname,
                sender_phone,
                sender_address,
                receiver_fname,
                receiver_lname,
                receiver_phone,
                receiver_address,
                amount,
                remarks
                ) VALUES (?,?,?,?,?,?,?,?,?,?)");

            $stm->execute([
                $this->sender_fname,
                $this->sender_lname,
                $this->sender_phone,
                $this->sender_address,
                $this->receiver_fname,
                $this->receiver_lname,
                $this->receiver_phone,
                $this->receiver_address,
                $this->amount,
                $this->remarks
            ]);

            echo "<script>alert('Transfer Completed Successfully!');document.location='home.php'</script>";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function fetchAll()
    {
        try {
            $stm = $this->dbconn->prepare("SELECT * FROM transfer");
            $stm->execute();
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function fetchOne()
    {
        try {
            $stm = $this->dbconn->prepare("SELECT * FROM transfer WHERE transaction_code=?");
            $stm->execute([$this->transaction_code]);
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update()
    {
        try {
            $stm = $this->dbconn->prepare("UPDATE transfer SET 
            sender_fname = ?,
            sender_lname = ?,
            sender_phone = ?,
            sender_address = ?,
            amount = ?
            WHERE transaction_code = ?
            ");

            $stm->execute([
                $this->sender_fname,
                $this->sender_lname,
                $this->sender_phone,
                $this->sender_address,
                $this->amount,
                $this->transaction_code
            ]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete()
    {
        try {
            $stm = $this->dbconn->prepare("DELETE FROM transfer WHERE transaction_code=?");
            $stm->execute([$this->transaction_code]);
            return $stm->fetchAll();
            echo "<script>alert('Data Deleted Successfully!');document.location='transactions.php'</script>";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
