<?php
    session_start();


    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        include "connectDB.php";
        $betyg = $_POST['betyg'];
        $kommentar = $_POST['kommentar'];
        $kaka = $_COOKIE['user'];
        $artikelnr = $_POST['artikelnr'];



        $sql = "SELECT Betyg FROM Kommentar WHERE ArtikelNr = '$artikelnr'";
        $result = $conn->query($sql);
        $antal = 0;
        $gamlabetyg = 0;
        while($row = $result->fetch_assoc()){
            $gamlabetyg = $gamlabetyg + $row['Betyg'];
            $antal++;
        }
        

        $täljare = ($gamlabetyg + $betyg);
        $nämnare = ($antal+1);

       
        if($antal = 0){
            $nyttbetyg = $betyg;
        }else{
            $nyttbetyg = round($täljare / $nämnare); 
        }
        

        $sql = "UPDATE Vara SET Betyg = '$nyttbetyg' WHERE ArtikelNr = '$artikelnr'";
        $conn->query($sql);


        $sql = "INSERT INTO `Kommentar`(`KundNr`, `ArtikelNr`, `Kommentaren`, `Betyg`)
        VALUES('$kaka', '$artikelnr', '$kommentar', '$betyg')";
        if($conn->query($sql)){
            $message = "Lade till betyg!";
            echo "<script type='text/javascript'>alert('$message');window.location.href = 'minsida_kund.php';</script>";
        }else{
            $message = "Något gick fel, vänligen försök igen";
            echo "<script type='text/javascript'>alert('$message');window.location.href = 'minsida_kund.php';</script>";
        }

    }
    

    ?>
