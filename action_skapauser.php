<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">


<?php


include "connectDB.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];


$sql = "INSERT INTO `Konto`(`Förnamn`, `Efternamn`, `Email`, `Rank`, `Lösenord`) 
VALUES ('$fname','$lname','$email','kund','$pwd')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>