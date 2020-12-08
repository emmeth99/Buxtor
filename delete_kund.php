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

            <h2>Ödelägg mitt konto</h2>


            <button onclick="myFunction()">Förinta mitt konto</button>

                <p id="demo"></p>

            <script>
            function myFunction() {
                var r = confirm("Vill du verkligen eliminera ditt konto?")
                if (r) {
                    window.alert("Ditt konto har blivit utplånat.");

                    window.location.href = "action_delete_kund.php";

                } else {
                    window.location.href = "delete_kund.php";
                }
                //document.getElementById("demo").innerHTML = txt;
            }
            </script>
        </div>
    </div>
</body>
</html>
