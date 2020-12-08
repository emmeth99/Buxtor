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

    <div class="nav3">
        <ul class="nav3-ul">
            <li class="nav3-li"> <a class="nav3-lia" href="#A">A</a> </li>
            <li class="nav3-li"> <a class="nav3-lia" href="#B">B</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#C">C</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#D">D</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#E">E</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#F">F</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#G">G</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#H">H</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#I">I</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#J">J</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#K">K</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#L">L</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#M">M</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#N">N</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#O">O</a></li>
        </ul>
        <ul class="nav3-ul">
            <li class="nav3-li"> <a class="nav3-lia" href="#P">P</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#Q">Q</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#R">R</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#S">S</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#T">T</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#U">U</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#V">V</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#W">W</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#X">X</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#Y">Y</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#Z">Z</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#Å">Å</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#Ä">Ä</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#Ö">Ö</a></li>
            <li class="nav3-li"> </li>
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
                
            </tr>
            
            
            <?php
            include "connectDB.php";

            $sql = "SELECT * FROM Vara ORDER BY Författare";
            $result = $conn->query($sql);

            
            while($row = $result->fetch_assoc()) { 
                $författare = $row["Författare"];
                echo $författare[0];
                if ($författare[0] == "A" || "B" || "C" || "D"|| "E"){?>

                <tr>
                    <td> <a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <img src="<?php echo $row["Bild"] ?>" class="produktBild"></a> </td>
                    1
                    <td> <p style="font-size:20px"><a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <?php echo $row["ArtikelNamn"] ?> </a></p> </td>
                    
                    <td> <?php echo $row["Författare"] ?> </td>
                    <td> <?php echo $row["Pris"] ?> kr </td>
                    

                </tr>

                <?php }
                else if($författare[0] == "F" || "G" || "H" || "I" || "J") {?>
                    <tr>
                    <td> <a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <img src="<?php echo $row["Bild"] ?>" class="produktBild"></a> </td>
                    2
                    <td> <p style="font-size:20px"><a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <?php echo $row["ArtikelNamn"] ?> </a></p> </td>
                    
                    <td> <?php echo $row["Författare"] ?> </td>
                    <td> <?php echo $row["Pris"] ?> kr </td>
                    

                </tr>
                <?php
                }
                else if($författare[0] == "K" || "L" || "M" || "N" || "O") {?>
                    <tr>
                    <td> <a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <img src="<?php echo $row["Bild"] ?>" class="produktBild"></a> </td>
                    3
                    <td> <p style="font-size:20px"><a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <?php echo $row["ArtikelNamn"] ?> </a></p> </td>
                    
                    <td> <?php echo $row["Författare"] ?> </td>
                    <td> <?php echo $row["Pris"] ?> kr </td>
                    

                </tr>
                <?php
                }
                else if($författare[0] == "P" || "Q" || "R" || "S" || "T") {?>
                    <tr>
                    <td> <a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <img src="<?php echo $row["Bild"] ?>" class="produktBild"></a> </td>
                    4
                    <td> <p style="font-size:20px"><a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <?php echo $row["ArtikelNamn"] ?> </a></p> </td>
                    
                    <td> <?php echo $row["Författare"] ?> </td>
                    <td> <?php echo $row["Pris"] ?> kr </td>
                    

                </tr>
                <?php
                }
                else if($författare[0] == "U" || "V" || "W" || "X" || "Y" || "Z"|| "Å" || "Ä" || "Ö") {?>
                    <tr>
                    <td> <a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <img src="<?php echo $row["Bild"] ?>" class="produktBild"></a> </td>
                    5
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
