<?php
session_name("login");
session_start();
if(isset($_SESSION['login'])){
    header("location: index.php");
    exit;
}
require_once("koneksi.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user = koneksi()->prepare('SELECT * FROM member where nomor_member = :nomor_member and password = :password');
    $user -> execute(array(
        ':nomor_member' => $_POST['nomor_member'],
        ':password' => $_POST['password']
    ));
    $cek = $user->fetch(PDO::FETCH_ASSOC);
    if(empty($cek['nomor_member'])){
        header('location:FormLogin.php');
    }
    else{
        $_SESSION['login'] = true;
        header("location: index.php");
    }
}
?>