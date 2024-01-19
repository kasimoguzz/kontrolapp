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

        $cikis_saati = date("Y-m-d H:i:s");

        $sql = "UPDATE mesai_saatleri SET cikis_saati = ? WHERE cikis_saati IS NULL ORDER BY giris_saati DESC LIMIT 1";

        if($stmt = mysqli_prepare($baglanti, $sql)) {
            mysqli_stmt_bind_param($stmt, "s",$cikis_saati);

            if(mysqli_stmt_execute($stmt)) {
                header("Location: mesai.php");
                $_SESSION["message"] = " mesainiz bitti";
                $_SESSION["type"] = "danger";
            } else {
                echo mysqli_error($baglanti);
                echo "<br>";
                echo "Hata oluştu";
            }
        }
    }
?>