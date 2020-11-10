<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="produkter.css">
</head>
<body>
    
    <header>
        <h1>&#128024 <a href="index.php">Buxtor Bokhandel </a>&#9924</h1>
    </header>

    

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
                <a class="nav-link" href="login.php">Logga in</a>
            </li>
        </ul>
        
    </nav>
    <div class="container">

    <div class="bild">
        <?php
            echo "PHP fuuunkaaar";
        ?>
    
        Produkter hääär!
        <?php
            $servername = "localhost:3306";
            $username = "991001";
            $password = "blåfisken";

            // Create connection
            $conn = new mysqli($servername, $username, $password);

            // Check connection
            if ($conn->connect_error) {
                echo "det gick inteee :(";
                die("Connection failed: ".$conn->connect_error);
            }
            echo "Connected successfully";

            $conn->close();
        ?>
    </div>


        
    </div>

</body>
</html>
