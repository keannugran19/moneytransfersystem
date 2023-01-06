<?php

if (isset($_POST['submit'])) {
    require_once("sendConfig.php");
    $sc = new sendConfig();

    $sc->setSender_fname($_POST['sfirstname']);
    $sc->setSender_lname($_POST['slastname']);
    $sc->setSender_phone($_POST['sphonenumber']);
    $sc->setSender_address($_POST['saddress']);
    $sc->setReceiver_fname($_POST['rfirstname']);
    $sc->setReceiver_lname($_POST['rlastname']);
    $sc->setReceiver_phone($_POST['rphonenumber']);
    $sc->setReceiver_address($_POST['raddress']);
    $sc->setAmount($_POST['amount']);
    $sc->setRemarks($_POST['remarks']);
    $sc->insertData();

    echo "<script>alert('Transfer Completed Successfully!');document.location='home.php'</script>";
}
