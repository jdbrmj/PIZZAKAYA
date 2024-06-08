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
            <main id="about-us-privacy-terms-content">
                <h2>Terms and Conditions</h2> <br />
                <h3>Welcome to Pizzakaya! </h3>
                <p>These Terms and Conditions govern your use of our website and the
                    services we offer good quality service.</p>

                <p>
                    By creating an account or
                    using the Service, you agree to be bound by these Terms.</p>
                <p>
                    1.
                    Eligibility You must be 18 years of age or older to use the
                    Service. By using the Service, you represent and warrant that you
                    meet all of the foregoing eligibility requirements.
                </p>
                <p>
                    2. Account
                    Creation To use certain features of the Service, you may need to
                    create an account. You are responsible for maintaining the
                    confidentiality of your account information, including your
                    username and password. You agree to accept responsibility for all
                    activities that occur under your account.
                </p>
                <p>
                    3. User Conduct You
                    agree to use the Service for lawful purposes only. You will not:
                    Use the Service to transmit any harassing, obscene, or unlawful
                    content. Interfere with the use of the Service by others. Violate
                    any applicable laws or regulations.
                </p>
                <p>
                    4. Termination We may
                    terminate your account or suspend your access to the Service at
                    any time, for any reason, with or without notice.
                </p>
                <p>
                    5. Intellectual
                    Property The content on the Service, including the trademarks,
                    logos, and copyrights, is owned by Pizzakaya or its licensors. You
                    may not use any of this content without our prior written
                    permission.
                </p>
                <p>
                    6. Disclaimer The Service is provided "as is" and
                    without warranties of any kind, express or implied. We disclaim
                    all warranties, including but not limited to, warranties of
                    merchantability, fitness for a particular purpose, and
                    non-infringement.
                </p>
                <p>
                    7. Limitation of Liability We will not be liable
                    for any damages arising out of your use of the Service, including
                    but not limited to, direct, indirect, incidental, consequential,
                    or punitive damages.
                </p>
                <p>
                    8. Entire Agreement These Terms constitute
                    the entire agreement between you and us regarding your use of the
                    Service.
                </p>
                <p>
                    9. Governing Law These Terms will be governed by and
                    construed in accordance with the laws of the Philippine Court
                    System.

                </p>

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

</script>

</html>