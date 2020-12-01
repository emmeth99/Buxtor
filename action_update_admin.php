<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">


<?php


include "connectDB.php";

$article = $_POST['article'];
$name = $_POST['name'];
$pris = $_POST['pris'];
$genre = $_POST['genre'];
$author = $_POST['author'];
$besk = $_POST['besk'];
$saldo = $_POST['saldo'];


$sql = "UPDATE `Vara` SET `ArtikelNamn`='$name',`Pris`='$pris',`Genre`='$genre',`Författare`='$author',`Beskrivning`='$besk', `Lagersaldo` = '$saldo' WHERE `ArtikelNr`='$article'";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


header("Location: http://92.32.39.21:8080/minsida_admin.php");
?>