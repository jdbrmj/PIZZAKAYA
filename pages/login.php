<?php
if(!isset($_SESSION)){
    session_start();
}
if ($_SESSION['user_id'] != '?)*@{}:)(@'){
    if ($_SESSION['user_id'] != ''){
        $_SESSION['user_id'] = '';
     }
        
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/main.css" />
    <script src="scripts/page-check.js"></script>
    <link rel="stylesheet" href="../styles/animation.css">
    <link rel="stylesheet" href="../styles/viewport.css">
    <link rel="stylesheet" href="../styles/element-effects.css">
    <title>Pizzakaya</title>
</head>
<body>
    <div>
        <header>
            <a href='../index.php'>
                <img src="../page-src/images/download.png" alt="logo" width="110" />
            </a>
            <nav>
                <div id="close-nav">
                    <img src="../buttons/close.svg" alt="close-button" height="20">
                </div>
                <ul>
                    <?php
                    include('../widgets/navigation.php');  
                ?>
                </ul>
            </nav>
            <div id="nav-button">
                <img src="../buttons/menu.svg" alt="menu" width="20" />
            </div>
        </header>
        <div id="wrapper">
            <main id="login-content">

                <?php
                   include('../widgets/check_user.php');
                   if ($_SESSION['user_id'] == '?)*@{}:)(@'){
                    ?>
                <div id="error-message">
                    <p>
                        <?='Incorrect email or password. Please try again.'?>
                    </p>
                </div>
                <?php
                    $_SESSION['user_id'] = '*&^%#';
                  }
                ?>

                <form method="post" action="../widgets/check_user.php" id="login-container">
                    <p id="login-title">Login</p>
                    <div class="form-div">
                        <label for="email">Email:</label>
                        <input type="email" name="email" required />
                    </div>
                    <div class="form-div">
                        <label for="password">Password: </label>
                        <input type="password" name="password" required />
                    </div>

                    <input type="submit" value="Login" />
                    <div id="forgot-password_create-account">
                        <a href="forgotpassword.php">Forgot Password</a>
                        <a href="sign-up.php">Create Account</a>
                    </div>
                </form>
            </main>
            <br><br>
        </div>

        <footer>
            <div id="Help-Information">
                <ul>
                    <li class="footer-title"><span>Help & Information</span></li>
                    <li><a href="terms.php">Terms & Conditions</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                </ul>
            </div>
            <div id="Address">
                <ul>
                    <li class="footer-title"><span>Address</span></li>
                    <li>
                        Located:
                        <span id="specific-address">Tagum City, <br />
                            Quezon St, Davao Del Norte</span>
                    </li>
                </ul>
            </div>
            <div id="footer-form">
                <ul>
                    <li class="footer-title"><span>Don't Miss Out</span></li>
                    <li>
                        Get awesome exclusives and more<br />
                        vouchers when you subscribe!
                    </li>
                    <li>
                        <form action="">
                            <input type="text" name="text" placeholder="Your Email" /><br />
                            <input type="submit" value="Subscribe" />
                        </form>
                    </li>
                    <li id="copy-right">&copy;2024, Pizzakaya All Rights Reserved.</li>
                </ul>
            </div>
        </footer>
    </div>
</body>
<script src="../scripts/nav.js"></script>
</html>