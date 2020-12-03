<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/add_admin.css">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        include "connectDB.php";

        $name = $_POST['name'];
        $pris = $_POST['pris'];
        $genre = $_POST['genre'];
        $author = $_POST['author'];
        $besk = $_POST['besk'];
        $saldo = $_POST['saldo'];


        $sql = "INSERT INTO `Vara`(`ArtikelNamn`, `Pris`, `Genre`, `Författare`, `Beskrivning`, `Lagersaldo`) 
        VALUES ('$name','$pris','$genre','$author','$besk', '$saldo')";

        $conn->query($sql);
        //if ($conn->query($sql) === TRUE) {
            //echo "New record created successfully";
        //} else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
        //}

        $sql = "SELECT ArtikelNr FROM Vara WHERE ArtikelNamn = '$name'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $ArtikelNr = $row['ArtikelNr'];
        $bildURL = "images/" . $ArtikelNr . ".jpg";

        $sql = "UPDATE Vara SET Bild = '$bildURL' WHERE ArtikelNr = '$ArtikelNr'";
        //Ta EJ bort nedanstående rad, den är livsviktig
        $conn->query($sql);


        $conn->close();

        $target_dir = "images/";
        $target_file = $bildURL;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                echo "den går iin";
                $uploadOk = 1;
            } else {
                $message = "Filen är inte en bild.";
                echo "<script type='text/javascript'>alert('$message');</script>";
                $uploadOk = 0;
            }
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "den går in";
            $message = "Bilden är för stor.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $message = "Endast JPG, JPEG, PNG & GIF filer är tillåtna.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        //if ($uploadOk == 0) {
        //echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        if($uploadOk != 0) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                echo "den går iiin";
                //header("Location: http://92.32.39.21:8080/minsida_admin.php");
            //} else {
                //$message = "Ett error uppstod när din fil skulle laddas upp.";
                //echo "<script type='text/javascript'>alert('$message');</script>";
                //echo " error: ".$_FILES['fileToUpload']['error'];
            //}
        }
        } 
    }   
    ?>
    <div class="container">

    <div class="bild">
        <div class="skapa">
            <h2>Lägg till vara</h2>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                <label for="name">Artikelnamn:</label><br>
                <input type="text" id="name" name="name" required><br>
                <label for="pris">Pris:</label><br>
                <input type="number" id="pris" name="pris" required><br>
                <label for="author">Författare:</label><br>
                <input type="text" id="author" name="author" required><br>
                <label for="saldo">Lagersaldo:</label><br>
                <input type="number" id="saldo" name="saldo" min="0"required><br>
                <label for="besk">Beskrivning:</label><br>
                <input type="text" id="besk" name="besk" required><br><br>
  
                <label for="genre">Genre:</label>
                <select id="genre" name="genre" required>
                    <option value="deckare">Deckare</option>
                    <option value="romantik">Romantik</option>
                    <option value="fakta">Fakta</option>
                    <option value="humor">Humor</option>
                    <option value="fantasy">Fantasy</option></select><br><br>
    
                    Välj bild:
                <input type="file" accept="image/*" name="fileToUpload" id="fileToUpload" required><br><br>
  
    
                <input type="submit" value="Lägg till">
                </form> 

        </div>
    </div>


        
    </div>

</body>
</html>
