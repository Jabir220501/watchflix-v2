<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watchflix | Login</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/auth.css">
    <script defer src="./assets/js/script.js"></script>
    <!-- JS Libraries -->
    <?php
    include 'includes/js-libraries.php';
    ?>
</head>

<body>
    <main class="login__container auth__container">
        <div class="error-message-modal message-modal">
            <p class="error-message modal-message"></p>
            <div class="time-bar-hide red-time-bar-hide"></div>
        </div>
        <div class="success-message-modal message-modal">
            <p class="success-message modal-message"></p>
            <div class="time-bar-hide green-time-bar-hide"></div>
        </div>
        <div class="login_wrapper auth__wrapper">
            <form action="./handlers/signup.php" method="POST" id="signup-form">
                <div class="auth-header">
                    <h2 class="logo">Watchflix</h2>
                    <p>Login to your account</p>
                </div>
                <div class="username-input-group auth-input-group">
                    <label for="username">Username</label>
                    <input type="input" placeholder="Username" name="username">
                </div>
                <div class="email-input-group auth-input-group">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="password-input-group auth-input-group">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="password-input-group auth-input-group">
                    <label for="confirm-password">Confirm password</label>
                    <input type="password" placeholder="Confirm password" name="confirm_password">
                </div>
                <div class="login-submit-button auth-submit-btn">
                    <button></button>
                    <input type="submit" value="Login">
                </div>
                <div class="register-dir auth-dir">
                    <h3>Already an account? <a href="login">Login</a></h3>
                </div>
            </form>
        </div>
    </main>
</body>

</html>