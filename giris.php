<?php
    require "libs/functions.php";
?>



<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>
<?php include "partials/_message.php" ?>



<?php

    require "libs/ayar.php"; 

    

    date_default_timezone_set('Europe/Istanbul');

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $giris_saati = date("Y-m-d H:i:s");

        $sql = "INSERT INTO mesai_saatleri(giris_saati) VALUES (?)";

        if($stmt = mysqli_prepare($baglanti, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $giris_saati);

            if(mysqli_stmt_execute($stmt)) {
                header("Location: mesai.php");
                $_SESSION["message"] = " mesainiz başladı";
                $_SESSION["type"] = "success";
            } else {
                echo mysqli_error($baglanti);
                echo "<br>";
                echo "Hata oluştu";
            }
        }
    }
?>