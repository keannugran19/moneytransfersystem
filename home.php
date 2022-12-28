<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MoneyWise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/moneytransfersystem/css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Start of NavBar -->
    <nav class="navbar navbar-expand-lg bg-light p-2 m-2 shadow p-3 mb-5 bg-body rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/mt-logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                MoneyWise
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Transactions
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/moneytransfersystem/API/send.php">Send Money</a></li>
                            <li><a class="dropdown-item" href="/moneytransfersystem/API/receive.php">Receive Money</a></li>
                            <li><a class="dropdown-item" href="/moneytransfersystem/API/transactions.php">Transaction History</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="img/user-icon.png" alt="Logo" width="24" height="24" class="mx-1 d-inline-block align-text-top"><b>Account</b></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/moneytransfersystem/API/login.php">Login</a></li>
                            <li><a class="dropdown-item" href="/moneytransfersystem/API/register.php">Register</a></li>
                        </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of NavBar -->
    <!-- Start of Content -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-start">
                        <img src="img/mt-logo.png" alt="Logo" width="60" height="40" class="d-inline-block align-text-top">
                        Welcome to MoneyWise!
                    </h1>
                    <p>Our money transfer system is a convenient and efficient way to send and receive funds electronically. The system is designed to be user-friendly and easy to use. Whether you're sending money to a friend or receiving money from your loved ones, our money transfer system is a reliable and convenient choice.</p>
                </div>
                <div class="col-6">
                    <h4 class="text-start p-3 m-2">
                        What do you want to do?
                    </h4>
                    <!-- Card 1-->
                    <div class="card border-0 bg-transparent position-relative">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="img/send-logo.png" class="img-fluid rounded-start m-2" width="100" height="100" alt="send">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <br>
                                    <h5 class="text-center align-middle">Send Money</h5>
                                </div>
                                <a href="/moneytransfersystem/API/send.php" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="card border-0 bg-transparent position-relative">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="img/receive-logo.png" class="img-fluid rounded-start m-2" width="100" height="100" alt="send">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <br>
                                    <h5 class="text-center align-middle">Receive Money</h5>
                                </div>
                                <a href="/moneytransfersystem/API/receive.php" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="card border-0 bg-transparent position-relative">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="img/transaction-logo.png" class="img-fluid rounded-start m-2" width="100" height="100" alt="send">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <br>
                                    <h5 class="text-center align-middle">View Transaction History</h5>
                                </div>
                                <a href="/moneytransfersystem/API/transactions.php" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Cards -->
                </div>
            </div>
        </div>
    </header>
    <!-- End of Content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>