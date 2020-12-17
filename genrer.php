<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">


<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/produkter.css">
</head>
<body>
    
    <?php include "header.php" ?>
    <?php include "navbar.php" ?>

    <div class="container">


    <div class="nav2">
        <ul class="nav2-ul">
            <li class="nav2-li"> <a class="nav2-lia" href="genrer.php?genre=deckare">Deckare</a> </li>
            <li class="nav2-li"> <a class="nav2-lia" href="genrer.php?genre=fakta">Fakta</a></li>
            <li class="nav2-li"> <a class="nav2-lia" href="genrer.php?genre=fantasy">Fantasy</a></li>
            <li class="nav2-li"> <a class="nav2-lia" href="genrer.php?genre=humor">Humor</a></li>
            <li class="nav2-li"> <a class="nav2-lia" href="genrer.php?genre=romantik">Romantik</a></li>
        </ul>
    
    </div>

    <div class="bild">
    

        <br>
        <br>
        <div class="tabell">
        <table style="width:100%"><tr>
                <th></th>
                <th style="font-size:30px">Titel</th>
                <th style="font-size:30px">Författare</th>
                <th style="font-size:30px">Pris</th>
                <th> 
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <input type="hidden" id="order" name ="order" value="ASC">
                        <input type="submit" value="Pris - &#8593">
                        
                    </form>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <input type="hidden" id="order" name ="order" value="DESC">
                        <input type="submit" value="Pris - &#8595">
                        
                    </form>
                    
                </th>
                
            </tr>
            
            
            <?php
            include "connectDB.php";


            if(isset($_GET['genre'])){
                $genre = $_GET['genre'];

                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $order = $_POST['order'];
                    echo $order;
                    $sql = "SELECT * FROM Vara WHERE Genre = '$genre' ORDER BY Pris $order";
                }
                else{
                    $sql = "SELECT * FROM Vara WHERE Genre = '$genre'";
                }
                
                if($result = $conn->query($sql)){
                    echo "det gick";
                }else{
                    echo "det gick inte".$sql;
                }

                while($row = $result->fetch_assoc()) { ?>

                    <tr>
                        <td> <a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <img src="<?php echo $row["Bild"] ?>" class="produktBild"></a> </td>

                        <td> <p style="font-size:20px"><a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <?php echo $row["ArtikelNamn"] ?> </a></p> </td>
                        
                        <td> <?php echo $row["Författare"] ?> </td>
                        <td> <?php echo $row["Pris"] ?> kr </td>
                        
                    </tr>

                <?php 
                }
            }else{
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $order = $_POST['order'];
                    echo $order;
                    $sql = "SELECT * FROM Vara ORDER BY Pris $order";
                }else{
                    $sql = "SELECT * FROM Vara";
                }

                if($result = $conn->query($sql)){
                    echo "det gick";
                }else{
                    echo "det gick inte".$sql;
                }

                $result = $conn->query($sql);

                
                while($row = $result->fetch_assoc()) { ?>

                    <tr>
                        <td>  <a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "><img src="<?php echo $row["Bild"] ?>" class="produktBild"> </a></td>

                        <td> <p style="font-size:20px"><a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <?php echo $row["ArtikelNamn"] ?> </a></p> </td>
                        
                        <td> <?php echo $row["Författare"] ?> </td>
                        <td> <?php echo $row["Pris"] ?> kr </td>
                        

                    </tr>

                <?php 
                }
            }
            $conn->close();
        ?>


                
        </table>
        </div>
    </div>


        
    </div>

</body>
</html>
