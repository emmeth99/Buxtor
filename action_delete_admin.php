<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">


<?php


include "connectDB.php";

$article = $_POST['article'];

$sql = "DELETE FROM Vara Where ArtikelNr = $article";

$conn->close();

header("Location: http://92.32.39.21:8080/minsida_admin.php");
?>