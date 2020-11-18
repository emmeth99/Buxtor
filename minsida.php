<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">

<?php
    include "connectDB.php";
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT KundNr, Lösenord FROM Konto WHERE Email =  '$email' ";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    $id = $row['KundNr'];
    
    if($pwd != $row['Lösenord']){
        header("Location: http://92.32.39.21:8080/login.php");
        exit();
    }
    
    $cookie_name = "user";
    $cookie_value = $id;
    setcookie($cookie_name, $cookie_value, time() + (86400), "/"); 


    $sql = "SELECT Rank FROM Konto WHERE KundNr =  '$id' ";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    $rank = $row['Rank'];

    $_SESSION["rank"] = $rank;

    $conn->close();

    if($rank == "admin"){
        header("Location: http://92.32.39.21:8080/minsida_admin.php");
        
    }elseif($rank == "kund"){
        header("Location: http://92.32.39.21:8080/minsida_kund.php");        
        
    }else{
        header("Location: http://92.32.39.21:8080/login.php"); /* Redirect browser */
        
    }   




?>

