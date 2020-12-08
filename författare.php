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
            <li class="nav3-li"> <a class="nav3-lia" href="#ABCDE">A-E</a> </li>
            <li class="nav3-li"> <a class="nav3-lia" href="#FGHIJ">F-J</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#KLMNO">K-O</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#PQRST">P-T</a></li>
            <li class="nav3-li"> <a class="nav3-lia" href="#UVWXYZÅÄÖ">U-Ö</a></li>
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
                if ($författare[0] == "A" || $författare[0] == "B" || $författare[0] == "C" || $författare[0] == "D" || $författare[0] == "E"){?>

                <tr>
                    <a id=ABCDE></a>
                    <td> <a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <img src="<?php echo $row["Bild"] ?>" class="produktBild"></a> </td>
                    1
                    <td> <p style="font-size:20px"><a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <?php echo $row["ArtikelNamn"] ?> </a></p> </td>
                    
                    <td> <?php echo $row["Författare"] ?> </td>
                    <td> <?php echo $row["Pris"] ?> kr </td>
                    

                </tr>

                <?php }
                else if($författare[0] == "F" || $författare[0] == "G" || $författare[0] == "H" || $författare[0] == "I" || $författare[0] == "J") {?>
                    <tr>
                    <a id=FGHIJ></a>
                    <td> <a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <img src="<?php echo $row["Bild"] ?>" class="produktBild"></a> </td>
                    2
                    <td> <p style="font-size:20px"><a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <?php echo $row["ArtikelNamn"] ?> </a></p> </td>
                    
                    <td> <?php echo $row["Författare"] ?> </td>
                    <td> <?php echo $row["Pris"] ?> kr </td>
                    

                </tr>
                <?php
                }
                else if($författare[0] == "K" || $författare[0] == "L" || $författare[0] == "M" || $författare[0] == "N" || $författare[0] == "O") {?>
                    <tr>
                    <a id=KLMNO></a>
                    <td> <a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <img src="<?php echo $row["Bild"] ?>" class="produktBild"></a> </td>
                    3
                    <td> <p style="font-size:20px"><a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <?php echo $row["ArtikelNamn"] ?> </a></p> </td>
                    
                    <td> <?php echo $row["Författare"] ?> </td>
                    <td> <?php echo $row["Pris"] ?> kr </td>
                    

                </tr>
                <?php
                }
                else if($författare[0] == "P" || $författare[0] == "Q" || $författare[0] == "R" || $författare[0] == "S" || $författare[0] == "T") {?>
                    <tr id=PQRST>
                    <a ></a>
                    <td> <a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <img src="<?php echo $row["Bild"] ?>" class="produktBild"></a> </td>
                    4
                    <td> <p style="font-size:20px"><a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <?php echo $row["ArtikelNamn"] ?> </a></p> </td>
                    
                    <td> <?php echo $row["Författare"] ?> </td>
                    <td> <?php echo $row["Pris"] ?> kr </td>
                    

                </tr>
                <?php
                }
                else if($författare[0] == "U" || $författare[0] == "V" || $författare[0] == "W" || $författare[0] == "X" || $författare[0] == "Y" || $författare[0] == "Z"|| $författare[0] == "Å" || $författare[0] == "Ä" || $författare[0] == "Ö") {?>
                    <tr>
                    <a id=UVWXYZÅÄÖ></a>
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
