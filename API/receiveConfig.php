<?php

require_once("pdoDB.php");

class receiveConfig
{
    private $receive_id;
    private $sender_fname;
    private $sender_lname;
    private $sender_phone;
    private $sender_address;
    private $receiver_fname;
    private $receiver_lname;
    private $receiver_phone;
    private $receiver_address;
    private $amount;
    private $reference_number;
    protected $dbconn;

    public function __construct(
        $receive_id = 0,
        $sender_fname = "",
        $sender_lname = "",
        $sender_phone = "",
        $sender_address = "",
        $receiver_fname = "",
        $receiver_lname = "",
        $receiver_phone = "",
        $receiver_address = "",
        $amount = "",
        $reference_number = ""
    ) {
        $this->receive_id = $receive_id;
        $this->sender_fname = $sender_fname;
        $this->sender_lname = $sender_lname;
        $this->sender_phone = $sender_phone;
        $this->sender_address = $sender_address;
        $this->receiver_fname = $receiver_fname;
        $this->receiver_lname = $receiver_lname;
        $this->receiver_phone = $receiver_phone;
        $this->receiver_address = $receiver_address;
        $this->amount = $amount;
        $this->reference_number = $reference_number;

        $this->dbconn = new PDO(DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function setCode($receive_id)
    {
        $this->receive_id = $receive_id;
    }

    public function getCode()
    {
        return $this->receive_id;
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

    public function setReferenceNumber($reference_number)
    {
        $this->reference_number = $reference_number;
    }

    public function getReferenceNumber()
    {
        return $this->reference_number;
    }

    public function insertData()
    {
        try {
            $stm = $this->dbconn->prepare("INSERT INTO receive(
                receiver_fname,
                receiver_lname,
                receiver_phone,
                receiver_address,
                sender_fname,
                sender_lname,
                sender_phone,
                sender_address,
                amount,
                transaction_code
                ) VALUES (?,?,?,?,?,?,?,?,?,?)");

            $stm->execute([
                $this->receiver_fname,
                $this->receiver_lname,
                $this->receiver_phone,
                $this->receiver_address,
                $this->sender_fname,
                $this->sender_lname,
                $this->sender_phone,
                $this->sender_address,
                $this->amount,
                $this->reference_number
            ]);

            echo "<script>alert('Transaction Complete!');document.location='home.php'</script>";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function fetchAll()
    {
        try {
            $stm = $this->dbconn->prepare("SELECT * FROM receive");
            $stm->execute();
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function fetchOne()
    {
        try {
            $stm = $this->dbconn->prepare("SELECT * FROM receive WHERE receive_id=?");
            $stm->execute([$this->receive_id]);
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update()
    {
        try {
            $stm = $this->dbconn->prepare("UPDATE receive SET 
            receiver_fname = ?,
            receiver_lname = ?,
            receiver_phone = ?,
            receiver_address = ?,
            amount = ?
            WHERE receive_id = ?
            ");

            $stm->execute([
                $this->receiver_fname,
                $this->receiver_lname,
                $this->receiver_phone,
                $this->receiver_address,
                $this->amount,
                $this->receive_id
            ]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete()
    {
        try {
            $stm = $this->dbconn->prepare("DELETE FROM receive WHERE receive_id=?");
            $stm->execute([$this->receive_id]);
            return $stm->fetchAll();
            echo "<script>alert('Data Deleted Successfully!');document.location='transactions.php'</script>";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
