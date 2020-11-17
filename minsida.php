<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">

<?php
    include "connectDB.php";
    $email = $_POST['email'];

    $sql = "SELECT KundNr FROM Konto WHERE Email =  '$email' ";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    $id = $row['KundNr'];
    
    
    $cookie_name = "user";
    $cookie_value = $id;
    setcookie($cookie_name, $cookie_value, time() + (86400), "/"); 

    echo "value: ".$cookie_value;

    $user = $_COOKIE[$cookie_name];

    $sql = "SELECT Rank FROM Konto WHERE KundNr =  '$user' ";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    $rank = $row['Rank'];

    $_SESSION["rank"] = $rank;
    echo "rank: " . $_SESSION["rank"];

    $conn->close();

    if(isset($_COOKIE["user"] && $_SESSION["rank"] == "admin"){
        header("Location: http://http://92.32.39.21:8080/minsida_admin.php");
        exit;
    }elseif(isset($_COOKIE["user"] && $_SESSION["rank"] == "kund"){
        header("Location: http://http://92.32.39.21:8080/minsida_kund.php");        
        exit;
    }else{
        header("Location: http://http://92.32.39.21:8080/login.php"); /* Redirect browser */
        exit();
    }   


?>

<html>




</html>
