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
    
    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>

    
    <div class="container">

    <div class="kassa">
        <div class="varukorg">
            <h3> Varukorg </h3>

            <table>
                <tr>
                    <th>Artikel</th>
                    <th>Pris/styck</th>
                    <th>Antal</th>
                    <th></th>
                </tr>
                
                <?php
                $summa = array();

                include "connectDB.php";
                $kaka = $_COOKIE["user"];
                $sql = "SELECT * FROM Varukorg WHERE KundNr = '$kaka'";
                $result = $conn->query($sql);
                $i = 0;

                while($row = $result->fetch_assoc()) { 
                    $artikel = $row["ArtikelNr"];
                    $sql2 = "SELECT * FROM Vara WHERE ArtikelNr = '$artikel'";
                    $result2 = $conn->query($sql2);
                    $row2 = $result2->fetch_assoc();
                    $summa[$i] = $row2['Pris'];

                    ?>
                    
                <tr>
                    <td> <?php echo $row2['ArtikelNamn'] ?> </td>
                    <td> <?php echo $row2['Pris'] ?> </td>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <td> <input type="number" id="antal" name="antal" min="1" value="<?php echo $row['Antal'] ?>"> </td>
                        <td> <input type="submit" value="OK"> </td>
                    </form>
                </tr>
                
                <?php 
                $i++;
                }
                $conn->close();

                
                ?>
            </table>
        </div>

        <div class="summa">
                <h4> Summa </h4>

                <table>

                    <th> </th>
                    <th> Pris </th>


                    <td> </td>
                    <td> </td>

                </table>

                <a href="betalning.php">Vidare till betalning</a>

        </div>


    </div>


        
    </div>

</body>


</html>
