<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">


<?php


include "connectDB.php";

$article = $_POST['article'];

$sql = "DELETE FROM Vara Where ArtikelNr = $article";

if ($conn->query($sql) == TRUE) {
    $message = "Varan har dräpts";
    echo "<script type='text/javascript'>alert('$message');window.location.href = 'minsida_admin.php';</script>";
} else {
    $message = "Något gick fel. Försök igen.";
    echo "<script type='text/javascript'>alert('$message');window.location.href = 'delete_admin.php';</script>";
}

$conn->close();

header("Location: http://92.32.39.21:8080/minsida_admin.php");
?>