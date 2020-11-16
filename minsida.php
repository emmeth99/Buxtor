<!DOCTYPE html>
<meta charset="UTF-8">

<?php
    include "connectDB.php";
    $email = $_POST['email'];

    $sql = "SELECT KundNr FROM Konto WHERE Email =  '$email' ";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    $id = $row['KundNr'];
    

    $cookie_name = "user";
    $cookie_value = $id;
    setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day

    //header("Refresh:0");

?>

<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/login.css">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php include "header.php" ?>
    

    <nav class="navbar">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="produkter.php">Kategorier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="produkter.php">Författare</a>
            </li>
            <li class="nav-item2">
                <a class="nav-link" href="#">Kassa</a>
            </li>
            <li class="nav-item2">
                <a class="nav-link" href="minsida.php">Min Sida</a>
            </li>
        </ul>
        
        
    </nav>
    <div class="container">

        <div class="bild">

            <?php
                $user = $_COOKIE[$cookie_name];

                $sql = "SELECT Rank FROM Konto WHERE KundNr =  '$user' ";
                $result = $conn->query($sql);

                $row = $result->fetch_assoc();
                $rank = $row['Rank'];

                if($rank == "admin"){
                    include "minsida_admin.php";
                }else if($rank == "kund"){
                    include "minsida_kund.php";
                }
                
                $conn->close();

            ?>

        </div>
            
    </div>

</body>
</html>
