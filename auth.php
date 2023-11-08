<?php
require_once "session.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log_in.css">
    
    <title>log in</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="sign_up.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text"name="name_user" placeholder="Name" value="<?php 
                    if(isset($_COOKIE['name'])){
                        echo $_COOKIE['name'];
                    }
                ?>" required/>
                <input type="email" name="email" placeholder="Email" value="<?php 
                    if(isset($_COOKIE['email'])){
                        echo $_COOKIE['email'];
                    }
                ?>" required/>
                <input type="text" name="country_user" placeholder="Country" value="<?php 
                    if(isset($_COOKIE['country'])){
                        echo $_COOKIE['country'];
                    }
                ?>">
                <input type="password" name="password" placeholder="Password" required/>
                <input type="password" name="conf_passw" placeholder="Confirm password" required>
                <?php
                    if($_SESSION['message'])
                    {
                        echo '<p class="message">' .$_SESSION['message']. '</p>';
                    }
                    unset($_SESSION['message']);
                ?>
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="sign_in.php" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <?php
                    if($_SESSION['message_sign_in'])
                    {
                        echo '<p class="message">' .$_SESSION['message_sign_in']. '</p>';
                    }
                    unset($_SESSION['message_sign_in']);
                ?>
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>
                        To keep connected with us please login with your personal info
                    </p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/animation_form.js"></script>
</body>
</html>