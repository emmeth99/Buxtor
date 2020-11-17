<!DOCTYPE html>
<meta charset="UTF-8">

<?php
    if(isset($_COOKIE["user"])) {
        $cookieIsSet = true;
        echo "cookie:  ". $_COOKIE["user"];
    } else {
        echo "Cookie is not set!<br>";
        
    }
?>

<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/index.css">

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
                <a class="nav-link" href="<?php if($cookieIsSet){
            echo "minsida.php";
        }else{
            echo "login.php";
        } ?>"> aaa </a>
            </li>
        </ul>
        
    </nav>
    <div class="container">

    <div class="bild">
        
    </div>


        
    </div>

</body>


</html>
