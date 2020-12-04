<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">


<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/betalning.css">
</head>
<body>
    
    <?php include "header.php" ?>
    <?php include "navbar.php" ?>

    <div class="container">

        <div class="bild">
            <table>
                <th> Ordernummer </th>
                <th> Datum </th>

                <?php
                include "connectDB.php";

                $kaka = $_COOKIE['user'];
                $sql = "SELECT * FROM Beställning WHERE KundNr = '$kaka'";
                $result = $conn->query($sql);
                
                while($row = $result->fetch_assoc()){
                    ?>
                    <tr>
                        <td> <a href=" <?php echo "info_order.php?ordernr=".$row['OrderNr'] ?> "> <?php echo $row["OrderNr"] ?> </a> </td>
                        <td> <?php echo $row['Datum'] ?> </td>
                    </tr>

                    <?php
                }
                
                

                $conn->close();
                ?>

            </table>
        </div>
    </div>

</body>
</html>
