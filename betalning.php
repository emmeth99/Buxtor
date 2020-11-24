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
            <div class="betalning">
                <h2>Betalning</h2>

                <form action="/action_page.php">
                    <label for="fname">Address:</label>
                    <input type="text" id="fname" name="fname">
                    <label for="lname">Postnr & Ort:</label>
                    <input type="text" id="lname" name="lname"><br>
                    <label for="fname">Kortnr:</label>
                    <input type="text" id="fname" name="fname">
                    <label for="lname">CVC/CVV:</label>
                    <input type="text" id="lname" name="lname"><br>
                    <input type="submit" value="Betala">
                </form> 

                <p>Genom att genomföra köpet godkänner du att du ger oss pengar och får troligtvis inget tillbaka.</p>
            </div>
        </div>


        
    </div>

</body>
</html>
