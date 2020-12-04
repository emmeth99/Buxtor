<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">


<?php


include "connectDB.php";

$kaka = $_COOKIE['user'];
$sql = "DELETE FROM `Konto` WHERE `KundNr` = $kaka";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: http://92.32.39.21:8080/logout.php");
?>