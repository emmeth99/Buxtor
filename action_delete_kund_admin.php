<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">


<?php


include "connectDB.php";

$kund = $_POST['kund'];

$sql = "DELETE FROM Konto Where KundNr = $kund";

if ("SELECT COUNT(1) FROM Konto WHERE KundNr = $kund" == 1) {
    $conn->query($sql)
    $message = "Kunden har tagits bort.";
    echo "<script type='text/javascript'>alert('$message');window.location.href = 'minsida_admin.php';</script>";
} else {
    $message = "Något gick fel. Försök igen.";
    echo "<script type='text/javascript'>alert('$message');window.location.href = 'delete_kund_admin.php';</script>";
}

$conn->close();

//header("Location: http://92.32.39.21:8080/minsida_admin.php");
?>