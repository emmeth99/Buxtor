<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/password.css">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>

    <?php

    include "connectDB.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $old = $_POST['old'];
        $new = $_POST['new'];

        $kaka = $_COOKIE['user'];
        $sql = "SELECT 'Lösenord' FROM Konto WHERE KundNr = '$kaka'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if ($row['Lösenord'] == $old) {
            $sql = "UPDATE 'Konto' Set 'Lösenord' = '$new' Where 'KundNr'= '$kaka'";
            $conn->query($sql);
            $message = "Lösenordet har ändrats!";
            echo "<script type='text/javascript'>alert('$message');window.location.href = 'minsida_kund.php';</script>";
            //header("Location: http://92.32.39.21:8080/login.php");
            //echo "New record created successfully";
        } else {
            $message = "Fel lösenord!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            //echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
    ?>

    <div class="container">

    <div class="bild">
        <div class="skapa">
            <h2>Ändra lösenord</h2>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <label for="old">Gammalt lösenord:</label><br>
                <input type="pwd" id="old" name="old" required><br> 
                <label for="new">Nytt lösenord:</label><br>
                <input type="pwd" id="new" name="new" required><br><br>   
                <input type="submit" value="Ändra">
                </form> 

        </div>
    </div>


        
    </div>

</body>
</html>
