<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">


<?php


$name = $_POST['name'];
$pris = $_POST['pris'];
$genre = $_POST['genre'];
$author = $_POST['author'];
$besk = $_POST['besk'];
$saldo = $_POST['saldo'];



$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);


$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  //echo "Sorry, file already exists.";
  $message = "Filen existerar redan!";
  echo "<script type='text/javascript'>alert('$message');window.location.href = 'add_admin.php';</script>";
  $uploadOk = 0;

}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  //echo "Sorry, your file is too large.";
  $message = "Filen är för stor!";
  echo "<script type='text/javascript'>alert('$message');window.location.href = 'add_admin.php';</script>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $message = "Endast JPG, JPEG, PNG & GIF filer!";
  echo "<script type='text/javascript'>alert('$message');window.location.href = 'add_admin.php';</script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  include "connectDB.php";
  $conn->autocommit(FALSE);
  $sql = "INSERT INTO `Vara`(`ArtikelNamn`, `Pris`, `Genre`, `Författare`, Bild, Beskrivning, `Lagersaldo`) 
    VALUES ('$name','$pris','$genre','$author', '$target_file', '$besk', '$saldo')";
    if($conn->query($sql)){
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $message = "Varan har lagts till!";
        echo "<script type='text/javascript'>alert('$message');window.location.href = 'minsida_admin.php';</script>";
        $conn->commit(); 
      }
      else{
        $conn->rollback();
        $message = "Det blev fel i uppladdningen av bilden.";
        echo "<script type='text/javascript'>alert('$message');</script>";
      } 
      $conn->autocommit(TRUE);
      $conn->close();
  } else {
    $message = "Något gick fel, vänligen försök igen.";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
}

//header("Location: http://92.32.39.21:8080/minsida_admin.php");
?>