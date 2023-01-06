<?php

@include 'db_connect.php';

session_start();
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
<style>
    td {
        font-size: 13px;
    }
</style>

<body>
    <!-- Start of NavBar -->
    <nav class="navbar navbar-expand-lg bg-light p-2 m-2 shadow mb-2 bg-body rounded">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="/moneytransfersystem/img/mt-logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                MoneyWise
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/moneytransfersystem/API/home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Transactions
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/moneytransfersystem/API/send.php">Send Money</a></li>
                            <li><a class="dropdown-item" href="/moneytransfersystem/API/receive.php">Receive Money</a></li>
                            <li><a class="dropdown-item" href="/moneytransfersystem/API/transaction.php">Transaction History</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/moneytransfersystem/img/user-icon.png" alt="Logo" width="24" height="24" class="mx-1 d-inline-block align-text-top"><b>Account</b></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li class="m-2"><?php echo $_SESSION['email']; ?></li>
                            <li><a class="dropdown-item" href="/moneytransfersystem/API/logout.php">Logout</a></li>
                        </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of NavBar -->
    <!-- Start of Content -->
    <div class="container">
        <div class="row">
            <div class="col-5 p-3 m-auto">
                <h2 class="text-center">
                    Transaction History <img src="/moneytransfersystem/img/transaction-logo.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                </h2>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col mx-auto text-center">
                <div class="btn-group">
                    <a href="/moneytransfersystem/API/transactions.php" class="btn btn-outline-dark" aria-current="page">Send History</a>
                    <a href="/moneytransfersystem/API/transactions1.php" class="btn btn-outline-dark">Receive History</a>
                    <a href="/moneytransfersystem/API/dailysend.php" class="btn btn-outline-dark" aria-current="page">Daily Records</a>
                    <a href="/moneytransfersystem/API/transactions2.php" class="btn btn-outline-dark active">All Records</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container-fluid">
                <?php

                @include 'db_connect.php';

                $sql = "SELECT * FROM transfer CROSS JOIN receive";
                $result = mysqli_query($conn, $sql);


                if (mysqli_num_rows($result) > 0) {
                    echo '<table class="table table-striped table-dark mt-4">';
                    echo "<tr><th>Sender Name</th><th>Sender Address</th><th>Phone Number</th><th>Receiver Name</th><th>Receiver Address</th><th>Phone Number</th><th>Amount</th><th>Transaction Code</th><th>Date Issued</th></tr>";
                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row["sender_fname"] . " " . $row["sender_lname"] . "</td><td>" . $row["sender_address"] . "</td><td>" . $row["sender_phone"] . "</td><td>" . $row["receiver_fname"] . " " . $row["receiver_lname"] . "</td><td>" . $row["receiver_address"] . "</td><td>" . $row["receiver_phone"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["transaction_code"] . "</td><td>" . $row["date_issued"] . "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>

        <!-- End of Content -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>