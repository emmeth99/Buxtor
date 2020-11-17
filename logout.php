<?php
    session_start();
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<html>

<?php
    setcookie("user", "", time() - 3600);
    session_unset();
    session_destroy();
    header("Location: http://92.32.39.21:8080/");        

?>

</html>
