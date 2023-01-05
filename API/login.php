<?php

@include 'db_connect.php';

session_start();

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);

    $select = "SELECT * FROM user_account WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        header('location:home.php');
    } else {
        $error[] = 'Incorrect email or password';
    }
}

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
        <div class="row mt-5">
            <div class="col-5 m-auto">
                <h2 class="text-center">
                    Log In to <img src="/moneytransfersystem/img/mt-logo.png" alt="Logo" width="60" height="40" class="d-inline-block align-text-top">MoneyWise
                </h2>
                <p class="text-center text-muted lead">For easier and faster transactions.</p>
                <!-- Start of Form -->
                <form action="#" method="post">
                    <?php
                    if (isset($error)) {
                        foreach ($error as $error) {
                            echo '<span class="error-msg">' . $error . '</span>';
                        }
                    }
                    ?>
                    <div class="input-group mb-2">
                        <input class="form-control rounded shadow bg-body rounded" type="email" name="email" id="email" placeholder="Email" method="post" required>
                    </div>
                    <div class="input-group mb-2">
                        <input class="form-control rounded shadow bg-body rounded" type="password" name="password" id="password" placeholder="Password" method="post" required>
                    </div>
                    <button class="input-group mb-2 btn btn-warning shadow rounded" id="submit" name="submit" type="submit">Log In</button>

                    <p class="text-center">don't have an account? <a class="text-success" href="register.php">register now</p>
                </form>

                <!-- End of Form -->
                <!-- End of Content -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
                <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>