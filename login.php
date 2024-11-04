<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['password'];

if (empty($login) || empty($password))
{
    echo "Wypełnij puste pola";
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
            echo "Witamy " . $row['login'];
        }
    } else {
        echo "Ten użytkownik nie istnieje";
    }
}