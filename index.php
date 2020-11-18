<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">

<?php
    if(isset($_COOKIE["user"])) {
        $cookieIsSet = true;
        echo "cookie:  ". $_COOKIE["user"];
    } else {
        echo "Cookie is not set!<br>";
        
    }
    echo $_SESSION["rank"];
?>

<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/index.css">

</head>
<body>
    
    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>

    
    <div class="container">

    <div class="bild">
        
    </div>


        
    </div>

</body>


</html>
