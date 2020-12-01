<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/skapauser.css">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>

    <?php

    include "connectDB.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];


        $sql = "INSERT INTO `Konto`(`Förnamn`, `Efternamn`, `Email`, `Rank`, `Lösenord`) 
        VALUES ('$fname','$lname','$email','kund','$pwd')";

        if ($conn->query($sql) == TRUE) {
            header("Location: http://92.32.39.21:8080/login.php");
            //echo "New record created successfully";
        } else {
            $message = "E-postadressen upptagen.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            //echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
    ?>

    <div class="container">

    <div class="bild">
        <div class="skapa">
            <h2>Skapa användare</h2>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="fname">Förnamn:</label>
                <input type="text" id="fname" name="fname" required>
                <label for="lname">Efternamn:</label>
                <input type="text" id="lname" name="lname" required><br>
                <label for="email">E-postadress</label>
                <input type="email" id="email" name="email" required>
                <label for="pwd">Lösenord:</label>
                <input type="password" id="pwd" name="pwd" required><br><br>
                <input type="submit" value="Skapa användare">
            </form> 

            <p>Genom att skapa en användare så äger vi dig.</p>
        </div>
    </div>


        
    </div>

</body>
</html>
