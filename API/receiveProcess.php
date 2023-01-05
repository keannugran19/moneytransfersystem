<?php

if (isset($_POST['submit'])) {
    require_once("receiveConfig.php");
    $sc = new receiveConfig();

    $sc->setReceiver_fname($_POST['rfirstname']);
    $sc->setReceiver_lname($_POST['rlastname']);
    $sc->setReceiver_phone($_POST['rphonenumber']);
    $sc->setReceiver_address($_POST['raddress']);
    $sc->setSender_fname($_POST['sfirstname']);
    $sc->setSender_lname($_POST['slastname']);
    $sc->setSender_phone($_POST['sphonenumber']);
    $sc->setSender_address($_POST['saddress']);
    $sc->setAmount($_POST['amount']);
    $sc->setReferenceNumber($_POST['referencenumber']);
    $sc->insertData();

    echo "<script>alert('Transaction Complete!');document.location='home.php'</script>";
}
