<?php
require_once("sendConfig.php");
$data = new sendConfig();
$transaction_code = $_GET['transaction_code'];
$data->setCode($transaction_code);

if (isset($_POST['edit'])) {
    $data->setSender_fname($_POST['sfirstname']);
    $data->setSender_lname($_POST['slastname']);
    $data->setSender_address($_POST['saddress']);
    $data->setSender_phone($_POST['sphonenumber']);
    $data->setAmount($_POST['amount']);

    echo $data->update();
    echo "<script>alert('Data Updated Successfully!');document.location='transactions.php'</script>";
}

$record = $data->fetchOne();
$val = $record[0];


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MoneyWise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/moneytransfersystem/css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Start of Content -->
    <div class="container">
        <div class="row">
            <div class="col-5 p-3 m-auto">
                <h2 class="text-center">
                    Edit Details:
                </h2>
            </div>
        </div>
        <!-- Start of Form -->
        <form action="" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 m-auto">
                        <label>Sender First Name:</label>
                        <div class="input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="text" name="sfirstname" id="firstname" value="<?php echo $val['sender_fname']; ?>">
                        </div>
                        <label>Sender Last Name:</label>
                        <div class="input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="text" name="slastname" id="lastname" value="<?php echo $val['sender_lname']; ?>">
                        </div>
                        <label>Phone Number:</label>
                        <div class=" input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="tel" name="sphonenumber" id="phonenumber" value="<?php echo $val['sender_phone']; ?>">
                        </div>
                        <label>Sender Address:</label>
                        <div class=" input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="text" name="saddress" id="address" value="<?php echo $val['sender_address']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 m-auto">
                        <label>Amount: </label>
                        <div class="input-group mb-2">
                            <span class="input-group-text bg-transparent border-0"><img src="/moneytransfersystem/img/philippine-peso.png" alt="peso"></span>
                            <input class="form-control rounded shadow bg-body rounded" type="number" id="amount" name="amount" min="0.01" step="0.01" value="<?php echo $val['amount']; ?>" required>
                        </div>
                        <input class="input-group btn btn-warning shadow rounded" name="edit" value="Update" type="submit" />
                    </div>
                </div>
            </div>
        </form>

        <!-- End of Form -->
        <!-- End of Content -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>