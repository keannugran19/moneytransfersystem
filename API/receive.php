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
    <!-- Start of NavBar -->
    <nav class="navbar navbar-expand-lg bg-light p-2 m-2 shadow mb-2 bg-body rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/moneytransfersystem/img/mt-logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                MoneyWise
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/moneytransfersystem/home.php">Home</a>
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
                            <img src="/moneytransfersystem/img/user-icon.png" alt="Logo" width="24" height="24" class="mx-1 d-inline-block align-text-top"><b>Account</b></a>
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
    <div class="container">
        <div class="row">
            <div class="col-5 p-3 m-auto">
                <h2 class="text-center">
                    Receive Money <img src="/moneytransfersystem/img/receive-logo.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                </h2>
            </div>
        </div>
        <!-- Start of Form -->
        <form action="#" method="POST">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <h6>Receiver Details:</h6>
                        <div class="input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="text" name="firstname" id="firstname" placeholder="First Name" method="post" required>
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="text" name="lastname" id="lastname" placeholder="Last Name" method="post" required>
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="tel" name="phonenumber" id="phonenumber" placeholder="Phone Number" method="post" required>
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="text" name="address" id="address" placeholder="Address" method="post" required>
                        </div>
                        <!-- <button class="input-group btn btn-warning shadow rounded" id="submit" type="submit">Send Money</button> -->
                    </div>
                    <div class="col-6">
                        <h6>Sender Details:</h6>
                        <div class="input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="text" name="firstname" id="firstname" placeholder="First Name" method="post" required>
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="text" name="lastname" id="lastname" placeholder="Last Name" method="post" required>
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="tel" name="phonenumber" id="phonenumber" placeholder="Phone Number" method="post" required>
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control rounded shadow bg-body rounded" type="text" name="address" id="address" placeholder="Address" method="post" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 m-auto">
                        <h6>Details:</h6>
                        <div class="input-group mb-2">
                            <span class="input-group-text bg-transparent border-0"><img src="/moneytransfersystem/img/philippine-peso.png" alt="peso"></span>
                            <input class="form-control rounded shadow bg-body rounded" type="number" id="amount" name="amount" min="0.01" step="0.01" placeholder="Amount to Receive" method="post" required>
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control rounded p-3 shadow bg-body rounded" type="text" name="reference" id="reference" placeholder="Enter Reference Number" method="post">
                        </div>
                        <button class="input-group btn btn-warning shadow rounded" id="submit" type="submit">Receive Money</button>
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