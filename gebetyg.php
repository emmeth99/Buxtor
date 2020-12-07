<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">


<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/orderhistorik.css">
</head>
<body>
    
    <?php include "header.php" ?>
    <?php include "navbar.php" ?>


    <div class="container">

        <div class="bild">
            <?php $artikelnr = $_POST['artikelnr']; ?>
            
            <form method="POST" action="action_gebetyg.php">
            <label for="betyg">Betyg:</label>
                <select id="betyg" name="betyg" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option></select><br><br>
                

                <label for="besk">Kommentar:</label><br>
                <input type="text" id="kommentar" name="kommentar" required><br><br>
                <input type="hidden" id="artikelnr" name="artikelnr" value="<?php echo $artikelnr ?>">

                <input type="submit" value="Lämna in betyg">
            </form>




        </div>
    </div>

</body>
</html>
