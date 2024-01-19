<?php
session_start();

function isLoggedIn() {
    return (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true);    
}

function isAdmin() {
    return (isLoggedIn() && isset($_SESSION["user_type"]) && $_SESSION["user_type"] == "admin");    
}

function safe_html($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data ;
}
function getUser(){
    include "ayar.php";
    $query = "SELECT * from kullanicilar";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}

function getTime(){
    include "ayar.php";
    $query = "SELECT * from mesai_saatleri";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}
function deleteUser(int $id) {
    include 'ayar.php';
    $query = "DELETE FROM kullanicilar WHERE id=$id";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}
function editUser(int $id, string $username, string $depertman) {
    include "ayar.php";
    $query = "UPDATE kullanicilar SET username='$username', depertman='$depertman' WHERE id=$id";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}
function getUserById(int $id) {
    include "ayar.php";
    $query = "SELECT * from kullanicilar WHERE id=$id";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}

function getMesaiSaatleri($id) {
    include "ayar.php";
    $query = "SELECT giris_saati, cikis_saati FROM mesai_saatleri WHERE id = ?";
    $stmt = mysqli_prepare($baglanti, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);

        return $result;
    } else {
        die("SQL sorgusu hazırlanırken bir hata oluştu: " . mysqli_error($baglanti));
    }
}
?>