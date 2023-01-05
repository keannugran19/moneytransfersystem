<?php
require_once("receiveConfig.php");
$data = new receiveConfig();
$transaction_code = $_GET['transaction_code'];
$data->setCode($transaction_code);

if (isset($_POST['edit'])) {
    $data->setReceiver_fname($_POST['rfirstname']);
    $data->setReceiver_lname($_POST['rlastname']);
    $data->setReceiver_address($_POST['raddress']);
    $data->setReceiver_phone($_POST['rphonenumber']);
    $data->setAmount($_POST['amount']);

    echo $data->update();
    echo "<script>alert('Data Updated Successfully!');document.location='transactions1.php'</script>";
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
                        <label>Receiver First Name:</label>
                        <div class="input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="text" name="rfirstname" id="firstname" value="<?php echo $val['receiver_fname']; ?>">
                        </div>
                        <label>Receiver Last Name:</label>
                        <div class="input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="text" name="rlastname" id="lastname" value="<?php echo $val['receiver_lname']; ?>">
                        </div>
                        <label>Receiver Number:</label>
                        <div class=" input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="tel" name="rphonenumber" id="phonenumber" value="<?php echo $val['receiver_phone']; ?>">
                        </div>
                        <label>Receiver Address:</label>
                        <div class=" input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="text" name="raddress" id="address" value="<?php echo $val['receiver_address']; ?>">
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