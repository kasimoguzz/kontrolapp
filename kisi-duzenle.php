<?php
    require "libs/functions.php";
?>

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<?php

    $id = $_GET["id"];
    $sonuc = getUserById($id);
    $selectedUser= mysqli_fetch_assoc($sonuc);

    $usernameErr = $username = "";
    $depertmanErr = $depertman = "";
    

    if($_SERVER["REQUEST_METHOD"]=="POST") {

        if(empty($_POST["username"])) {
            $usernameErr = "isim alanı gerekli.";
        } else {
            $username = safe_html($_POST["username"]);
        }

        if(empty($_POST["depertman"])) {
            $depertmanErr = "depertman no gerekli alan.";
        } else {
            $depertman = safe_html($_POST["depertman"]);
        }

       

        if(empty($depertmanErr) && empty($usernameErr)) {

            if(editUser($id,$username,$depertman)) {
               
                $_SESSION["message"] = $username." isimli kisi güncellendi";
                $_SESSION["type"] = "success";
                header('Location: admin-kisiler.php');
            }
        }
        
    }

?>

<div class="container my-3">

    <div class="card card-body">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-9">
                    
                        <div class="mb-3">
                            <label for="username">isim</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $selectedUser["username"];?>">
                            <div class="text-danger"><?php echo $usernameErr; ?></div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="depertman">depertman</label>
                            <input type="text" name="depertman" class="form-control" value="<?php echo $selectedUser["depertman"];?>">
                            <div class="text-danger"><?php echo $depertmanErr; ?></div>
                        </div>
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
                
            </div>
        </form>
    </div>
</div>
<?php include "partials/_editor.php" ?>
<?php include "partials/_footer.php" ?>