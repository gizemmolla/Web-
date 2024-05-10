<?php
$email = $_POST['email'];
$password = $_POST['password'];
$user = b231210094@sakarya.edu.tr
$pass = b231210094;
$name = b231210094;

if ($email === $user && $password === $pass){
    echo 'Hoş geldiniz "'. $name . '"';
} else {
    echo "Kullanıcı adı veya şifre hatalı.";
}
?>