<?php

require_once("sendConfig.php");

$record = new sendConfig();

if (isset($_GET['transaction_code']) && isset($_GET['req'])) {
    if ($_GET['req'] == "delete") {
        $record->setCode($_GET['transaction_code']);
        $record->delete();

        echo "<script>alert('Data Deleted Successfully!');document.location='transactions.php'</script>";
    }
}
?>

<?php

require_once("receiveConfig.php");

$record = new receiveConfig();

if (isset($_GET['transaction_code']) && isset($_GET['req'])) {
    if ($_GET['req'] == "delete") {
        $record->setCode($_GET['transaction_code']);
        $record->delete();

        echo "<script>alert('Data Deleted Successfully!');document.location='transactions.php'</script>";
    }
}
?>