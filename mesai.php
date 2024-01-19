<?php
    require "libs/functions.php";
?>



<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>
<?php include "partials/_message.php" ?>



<div class="container my-3">
    <div class="row text-center">
        <div class="col-12"><h1>Mesaimi Başlat</h1></div>
        <div class="col-12">
            <div class="my-4">
                <h2 id="saat" class="display-3"></h2>
            </div>
        </div>
        <div class="col-12" style="display:flex; align-items:center; justify-conten:center; margin-left:520px;">
            <form method="POST" action="giris.php">  
                <button type="submit" class="btn btn-success">Mesaimi Başlat</button>
            </form>
            &nbsp &nbsp
            <form action="cikis.php" method="POST">
            <button type="submit" class="btn btn-danger">Mesaimi Bitir</button>
            </form>
            
        </div>
    </div>
<?php include "partials/_footer.php" ?>

