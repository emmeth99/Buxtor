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
    
    <?php include "navbar.php"; 
    
    $summa = $_POST['summa'];
    ?>


    <div class="container">

        <div class="bild">
            <div class="betalning">
                <h2>Betalning</h2>

                <form action="beställning.php" method="POST"> 
                    <label for="fname">Adress:</label>
                    <input type="text" id="adress" name="adress" required> <br> <br>

                    <label for="lname">Postort:</label>
                    <input type="text" id="postort" name="postort" required>

                    <label for="lname">Postnr:</label>
                    <input type="number" id="postnr" name="postnr" required><br><br>

                    <label for="fname">Kortnr:</label>
                    <input type="number" id="kortnr" name="kortnr" required>

                    <label for="lname">CVC/CVV:</label>
                    <input type="number" id="cvc" name="cvc" required><br> <br>

                    <input type="hidden" id="summa" name="summa" value="<?php echo $summa ?>">
                    <input type="submit" value="Betala">
                </form> 

                <p>Genom att genomföra köpet godkänner du att du ger oss pengar och får troligtvis inget tillbaka.</p>
            </div>
        </div>


        
    </div>

</body>
</html>
