<?php
include '../database/connection.php';

if (
    isset($_POST['username']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['confirm_password'])
) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if the passwords fields match
    if ($password !== $confirm_password) {
        $error_message = "Password do not match. Please try again.";
        echo json_encode(['error' => $error_message]);
        exit();
    }

    // Check if the email already exists in the database
    $checkEmailQuery = "SELECT * FROM `users` WHERE `email` = '$email'";
    $emailResult = mysqli_query($conn, $checkEmailQuery);

    // Email already exists, show an error message
    if (mysqli_num_rows($emailResult) > 0) {
        $error_message = "Email already exists. Please choose a different email.";
        echo json_encode(['error' => $error_message]);
        exit();

    } else {
        // Email doesn't exist, add to the database
        $sql = "INSERT INTO `users`(`username`, `email`, `password`)
            VALUES ('$username','$email','$password')";

        $result = mysqli_query($conn, $sql);

        $success_message = "Registered successfully";
        echo json_encode(['success' => $success_message]);
    }
}
?>