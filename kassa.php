<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">

<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/kassa.css">

</head>
<body>
    


<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include "connectDB.php";
    $kaka = $_COOKIE['user'];
    $artikel = $_POST['artikelnr'];
    $antal = $_POST['antal'];

    $sql = "SELECT Lagersaldo FROM Vara WHERE ArtikelNr = '$artikel'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if($antal <= $row['Lagersaldo']){

        if($antal == 0){
            $sql = "DELETE FROM Varukorg WHERE ArtikelNr = '$artikel' AND KundNr = '$kaka'";
        }else{
            $sql = "UPDATE Varukorg SET Antal = '$antal' WHERE ArtikelNr = '$artikel' AND KundNr = '$kaka'";
        }
        $conn->query($sql);
    
    
        //$sql = "UPDATE Vara SET Lagersaldo = Lagersaldo + ";

    }


    
    
    $conn->close();
}


?>


    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>

    
    <div class="container">
        <div class="kassa">
            <?php
            if($_SESSION['rank'] == "kund"){
                
                include "connectDB.php";
                $kaka = $_COOKIE['user'];
                $sql = "SELECT * FROM Varukorg WHERE KundNr = '$kaka'";
                $result = $conn->query($sql);

                if($result->fetch_assoc()){
                    ?>
                    <table style="width:50%">

                    <th class="thTop"> Varukorg</th>
                    <th class="thTop">Summa</th>

                    <tr>
                        <td>  

                        <table>
                                <tr>
                                    <th>Artikel</th>
                                    <th>Pris/styck</th>
                                    <th>Antal</th>
                                    <th></th>
                                </tr>
                                
                                <?php
                                

                                include "connectDB.php";
                                $kaka = $_COOKIE["user"];
                                $sql = "SELECT * FROM Varukorg WHERE KundNr = '$kaka'";
                                $result = $conn->query($sql);
                                
                                $summa = 0;

                                while($row = $result->fetch_assoc()) { 
                                    $artikel = $row["ArtikelNr"];
                                    $sql2 = "SELECT * FROM Vara WHERE ArtikelNr = '$artikel'";
                                    $result2 = $conn->query($sql2);
                                    $row2 = $result2->fetch_assoc();
                                    $summa = $summa + ($row2['Pris'] * $row['Antal']);

                                    ?>
                                    
                                <tr>
                                    <td> <?php echo $row2['ArtikelNamn'] ?> </td>
                                    <td> <?php echo $row2['Pris'] ?> </td>
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                        <input type="hidden" id="artikelnr" name="artikelnr" value="<?php echo $artikel ?>"> 
                                        <td> <input type="number" id="antal" name="antal" min="0" value="<?php echo $row['Antal'] ?>"> </td>
                                        <td> <input type="submit" value="OK"> </td>
                                    </form>
                                </tr>
                                
                                <?php 
                                
                                }
                                $conn->close();

                                
                                ?>
                            </table>

                        </td>

                        <td>  
                            <?php 
                                $frakt = 29; 
                                $totalt = $summa+$frakt;
                            ?>
                        <table>
                                    <th> </th>
                                    <th> </th>

                                    <tr>
                                        <td> Varor: &nbsp </td>
                                        <td> <?php echo $summa ?> kr</td> 
                                    </tr>

                                    <tr>
                                        <td> Frakt: &nbsp </td>
                                        <td> <?php echo $frakt ?> kr </td>
                                    </tr>

                                    <tr>
                                        <td> Totalt: &nbsp </td>
                                        <td> <?php  echo $totalt?> kr </td>
                                    </tr>
                                </table>
                                
                        </td>
                    </tr>

                    </table>

                    <br> <br>
                <form action="betalning.php" method="post">
                    <input type="hidden" id="summa" name="summa" value="<?php echo $totalt ?>">
                    <input type="submit" value="Vidare till betalning">
                </form>
                    
                <?php
                }else{
                    echo "Du har inte köpt något än";
                }
                
            }else{
                echo "Logga in först";
            }
            $conn->close();

            ?>
            
            
        </div>
    </div>

   

</body>


</html>
