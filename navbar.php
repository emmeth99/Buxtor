<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">


<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/navbar.css">

</head>

    <nav class="navbar">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="genrer.php">Genrer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="författare.php">Författare</a>
            </li>
            <li class="nav-item2">
                <a class="nav-link" href="kassa.php">Kassa</a>
            </li>
            <li class="nav-item2">


                <a class="nav-link" href="
                
                <?php if($_SESSION["rank"] == "admin"){
                    echo "minsida_admin.php";
                }elseif($_SESSION["rank"] == "kund"){
                    echo "minsida_kund.php";
                }else{
                    echo "login.php";
                } ?>
        
        "> 
    
            <?php if($_SESSION["rank"] == "admin"){
                echo "Admin";
            }elseif($_SESSION["rank"] == "kund"){
                echo "Min sida";
            }else{
                echo "Logga in";
            } ?>

        </a>
            
            
            </li>
        </ul>
        
    </nav>
