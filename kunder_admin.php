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

    <div class="bild">

    <?php 
        if($_SESSION['rank'] == 'admin'){

        ?>
    

            <br>
            <br>
            <div class="tabell">
            <table style="width:100%"><tr>
                    <th style="font-size:30px">Kundnr</th>
                    <th style="font-size:30px">Kundnamn</th>
                    <th style="font-size:30px">E-post </th>
                    
                    
                </tr>
                
                
                <?php
                include "connectDB.php";

                $sql = "SELECT * FROM Konto";
                $result = $conn->query($sql);

                
                while($row = $result->fetch_assoc()) { ?>

                    <tr>
                        <td> <p style="font-size:20px"> <?php echo $row["KundNr"] ?> </td>

                        <td> <?php echo $row["Förnamn"]." ".$row["Efternamn"] ?> </td>
                        
                        <td> <?php echo $row["Email"] ?> </p></td>
                        
                        

                    </tr>

                <?php 
                }
                $conn->close();
            ?>


                    
            </table>
            </div>
            <?php
        }else{
        ?>
            <h1> Du är inte admin! &#128545</h1>

        <?php
        }   
        ?>
        </div>



        
    </div>

</body>
</html>
