<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watchflix | Login</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/auth.css">
    <!-- <script defer src="./assets/js/script.js"></script> -->
    <!-- JS Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/779df3ae2b.js" crossorigin="anonymous"></script>
</head>
<body>
    <main class="login__container auth__container">
        <div class="login_wrapper auth__wrapper">
            <form action="#">
                <div class="auth-header">
                    <h2 class="logo">Watchflix</h2>
                    <p>Login to your account</p>
                </div>
                <div class="email-input-group auth-input-group">
                   <label for="">Email</label>
                   <input type="email" placeholder="Email">
                </div>
                <div class="password-input-group auth-input-group">
                   <label for="">Password</label>
                   <input type="password" placeholder="Password">
                </div>
                <div class="forgot-password">
                    <p>Forgot Password</p>
                </div>
                <div class="login-submit-button auth-submit-btn">
                    <input type="submit" value="Login">
                </div>
                <div class="register-dir auth-dir">
                    <h3>Don't have an account? <a href="signup">Sign Up</a></h3>
                </div>
            </form>
        </div>
    </main>
</body>
</html>