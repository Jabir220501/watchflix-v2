<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watchflix | Login</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/auth.css">
    <!-- JS Libraries -->
    <?php
    include 'includes/js-libraries.php';
    ?>
</head>

<body>
    <main class="login__container auth__container">
        <div class="login_wrapper auth__wrapper">
            <form action="#">
                <div class="auth-header">
                    <h2 class="logo">Watchflix</h2>
                    <p>Login to your account</p>
                </div>
                <div class="username-input-group auth-input-group">
                    <label for="">Username</label>
                    <input type="input" placeholder="Username">
                </div>
                <div class="email-input-group auth-input-group">
                    <label for="">Email</label>
                    <input type="email" placeholder="Email">
                </div>
                <div class="password-input-group auth-input-group">
                    <label for="">Password</label>
                    <input type="password" placeholder="Password">
                </div>
                <div class="password-input-group auth-input-group">
                    <label for="">Confirm password</label>
                    <input type="password" placeholder="Confirm password">
                </div>
                <div class="login-submit-button auth-submit-btn">
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