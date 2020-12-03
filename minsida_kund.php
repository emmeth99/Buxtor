<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/minsida_kund.css">
</head>
<body>
    
    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>


    <div class="container">

        <div class="kund">

            <?php 
                include "connectDB.php";
                $kaka = $_COOKIE['user'];
                $sql = "SELECT Förnamn FROM Konto WHERE KundNr = '$kaka'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();

                $conn->close();
            ?>

            <h2> Välkommen <?php echo $row['Förnamn'] ?>! </h2>
            <a href="password.php"> Ändra lösenordet </a>   <br>
            <form method="post" action="logout.php">
                    <button type="submit">Logga ut</button>
            </form>

        </div>
            
    </div>

</body>
</html>


