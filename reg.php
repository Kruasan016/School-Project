<?php
require_once('db.php');

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($login) || empty($email) || empty($password)){
    echo "Wypełnij puste pola";
} else {
    $sql = "INSERT INTO `users` (login,email,password) VALUES ('$login', '$email', '$password')";
    if ($conn -> query($sql) === TRUE) {
        echo "Pomyślna rejestracja";
    } else {
        echo "błąd: " . $conn->error;
    }
}
