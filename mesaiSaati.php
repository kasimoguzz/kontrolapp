<?php
    require "libs/functions.php";

    if(!isAdmin()) {
        header("Location: unauthorize.php");
    }

    $id = $_GET["id"];

    $result =  getUserById($id);
    $user = mysqli_fetch_assoc($result);

    $mesaiSaatleri = getMesaiSaatleri($id);
?>

<?php include "partials/_message.php" ?>
<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<div class="container my-3">

    <div class="row">
        <div class="col-12">
            <h2>Kullanıcı Bilgileri</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Ad Soyad</th>
                        <th>Departman</th>
                        <th>Email</th>
                        <th>Tel No</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       
                        <td><?php echo $user["username"]?></td>
                        <td><?php echo $user["depertman"] ?></td>
                        <td><?php echo $user["email"] ?></td>
                        <td><?php echo $user["tel"] ?></td>
                        <td>
                            <a href="kisi-duzenle.php?id=<?php echo $user["id"];?>" class="btn btn-primary btn-sm">Düzenle</a>
                            <a href="kisi-sil.php?id=<?php echo $user["id"];?>" class="btn btn-danger btn-sm">Sil</a>
                            <a href="mesaiSaati.php?id=<?php echo $user["id"];?>" class="btn btn-success btn-sm">Mesai Saati</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h2>Mesai Saatleri</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Giriş Saati</th>
                        <th>Çıkış Saati</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($mesai = mysqli_fetch_assoc($mesaiSaatleri)): ?>
                        <tr>
                            <td><?php echo $mesai["giris_saati"] ?></td>
                            <td><?php echo $mesai["cikis_saati"] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "partials/_footer.php" ?>
