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

        <br>
        <br>

        <table style="width:100%">
            <tr>
                <th>Titel</th>
                <th>Författare</th>
                <th>Pris</th>
                <th>Beskrivning</th>
            </tr>
            
            
            <?php
            include "connectDB.php";

            $sql = "SELECT * FROM Vara";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>

                    <tr>
                        <td> <?php echo "$row["Titel"]" ?> </td>
                        <td>Smith</td>
                        <td>50</td>
                        <td>50</td>
                    </tr>

                    

                <?php}
              } else {
                echo "0 results";
            }


            $conn->close();
        ?>


                
        </table>
    </div>


        
    </div>

</body>
</html>
