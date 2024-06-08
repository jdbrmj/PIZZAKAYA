<?php
if(!isset($_SESSION)){
    session_start();
}
$_SESSION['user_id'] = '';
$_SESSION['check_input'] = '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/animation.css">
    <link rel="stylesheet" href="../styles/viewport.css">
    <link rel="stylesheet" href="../styles/element-effects.css">
    <script src="scripts/page-check.js"></script>
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
                <?php include('../widgets/register.php')?>
                <script>
                    let items = ['', '', '', '', ''];

                    items[0] = '<?=$_SESSION['user_input'][0]?>';
                    items[1] = '<?=$_SESSION['user_input'][1]?>';
                    items[2] = '<?=$_SESSION['user_input'][2]?>';
                    items[3] = '<?=$_SESSION['user_input'][3]?>';
                    items[4] = '<?=$_SESSION['user_input'][4]?>';


                </script>
                <form method="post" action="./sign-up.php" id="sign-up-form">
                    <p id="login-title">Create Account</p>
                    <div class="form-div">
                        <label for="email">Email: </label>
                        <input id="email-input" type="email" name="email" required />
                    </div>
                    <div class="form-div">
                        <label for="name">Firstname:</label>
                        <input type="text" name="name" id="fname" required />
                    </div>
                    <div class="form-div">
                        <label for="lastname">Lastname: </label>
                        <input type="text" name="lastname" id="lname" required />
                    </div>

                    <div class="form-div">
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" required />
                    </div>
                    <div class="form-div">
                        <label for="c-password">Confirm<br>Password: </label>
                        <input type="password" name="c-password" id="c-password" required />
                    </div>

                    <input type="submit" value="Sign Up" />
                    <div id="forgot-password_create-account">
                        <a class="" href="terms.php">Terms and Conditions</a>
                        <a href="privacy.php">Privacy Policy</a>
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
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }


    document.getElementById('email-input').value = items[0];
    document.getElementById('fname').value = items[1];
    document.getElementById('lname').value = items[2];
    document.getElementById('password').value = items[3];
    document.getElementById('c-password').value = items[4];


</script>

</html>