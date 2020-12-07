<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">


<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/info_order.css">
</head>
<body>
    
    <?php include "header.php" ?>
    <?php include "navbar.php" ?>

    <div class="container">

        <div class="bild">
            <div class="info">
            
            <table>
                    <th>  </th>
                    <th>  </th>
                    

                    <?php
                    include "connectDB.php";

                    $kaka = $_COOKIE['user'];
                    $ordernr = $_GET['ordernr'];
                    $sql = "SELECT * FROM Beställning WHERE OrderNr = '$ordernr'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc()
                    
                    
                    ?>
                    <tr>
                        <td> Ordernummer: </td>
                        <td> <?php echo $row["OrderNr"] ?> </td>
                    </tr>

                    <tr>
                        <td> Datum: </td>
                        <td> <?php echo $row["Datum"] ?> </td>
                    </tr>

                    <tr>
                        <td> Summa: </td>
                        <td> <?php echo $row["Summa"] ?>kr </td>
                    </tr>

                    <tr>
                        <td> Adress: </td>
                        <td> <?php echo $row["Adress"] ?> </td>
                    </tr>

                    <tr>
                        <td> Postnummer: </td>
                        <td> <?php echo $row["Postnummer"] ?> </td>
                    </tr>

                    <tr>
                        <td> Postort: </td>
                        <td> <?php echo $row["Postort"] ?> </td>
                    </tr>

                </table> <br> <br>
            </div>

            <div class="varor">
                <table>
                    <th>  </th>
                    <th> Artikel </th>
                    <th> Pris </th>
                    <th> Antal </th>
                    <th> Ditt betyg </th>
                    
                    
                    

                    <?php

                    $sql = "SELECT BeställningVara.Antal, BeställningVara.Pris, Vara.ArtikelNamn, Vara.Bild, Vara.ArtikelNr
                    FROM BeställningVara
                    INNER JOIN Vara ON BeställningVara.ArtikelNr=Vara.ArtikelNr
                    WHERE BeställningVara.OrderNr = '$ordernr'";

                    $result2 = $conn->query($sql);
                    
                    while($row2 = $result2->fetch_assoc()){
                        $artikel = $row2['ArtikelNr'];
                        $sql = "SELECT * FROM Kommentar WHERE ArtikelNr = '$artikel' AND KundNr = '$kaka'";
                        $result3 = $conn->query($sql);
                        ?>
                        <tr>
                            <td> <img src="<?php echo $row2["Bild"] ?>" class="produktBild">  </td>
                            <td> <?php echo $row2['ArtikelNamn'] ?> </td>
                            <td> <?php echo $row2['Pris'] ?>kr </td>
                            <td> <?php echo $row2['Antal'] ?> </td>
                            <td> <?php

                                if($row3 = $result3->fetch_assoc()){
                                    $betyg = $row3['Betyg'];
                                    while($betyg > 0){
                                        echo "&#9733";
                                        $betyg = $betyg-1;
                                    }
                                    $betyg = $row3['Betyg'];
                                    while($betyg < 5){
                                        echo "&#9734";
                                        $betyg = $betyg+1;
                                    }
                                }else{ ?>
                                    <form method="POST" action="gebetyg.php"> 
                                        <input type="hidden" id="artikelnr" name="artikelnr" value="<?php echo $row2['ArtikelNr'] ?>"> 
                                        <input type="submit" value="Ge betyg">
                                    </form>

                                <?php
                                }
                            
                            ?> </td>
                            
                            
                        </tr>

                        <?php
                        
                    }
                    

                    $conn->close();
                    ?>

                </table>
            </div>

        </div>
    </div>

</body>
</html>
