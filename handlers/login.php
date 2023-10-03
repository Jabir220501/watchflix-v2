<?php
include '../database/connection.php';

if (
    isset($_POST['email']) &&
    isset($_POST['password'])
) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);
}
?>