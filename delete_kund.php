<?php
    session_start();
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<title>Buxtor</title>
<link rel="stylesheet" href="css/minsida_kund.css">
<html>
<body>

    
<?php include "header.php" ?>
    
    <?php include "navbar.php" ?>


    <div class="container">

        <div class="kund">

            <h2>Ödelägga mitt konto</h2>


            <button onclick="myFunction()">Förinta mitt konto</button>

                <p id="demo"></p>

            <script>
            function myFunction() {
                var r = confirm("Vill du verkligen eliminera ditt konto?")
                if (r == true) {
                    <?php
                    include "connectDB.php";
                    $kaka = $_COOKIE['user'];
                    $sql = "DELETE FROM `Konto` WHERE `KundNr` = $kaka";
                    $conn->query($sql);
                    $conn->close();
                    ?>
                    header("Location: http://92.32.39.21:8080/logout.php");
                } else {
                    header("Location: http://92.32.39.21:8080/delete_kund.php");
                }
                document.getElementById("demo").innerHTML = txt;
            }
            </script>
        </div>
    </div>
</body>
</html>
