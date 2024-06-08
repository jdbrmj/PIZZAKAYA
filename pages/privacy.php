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
                <h2>Privacy Policy</h2><br>
                <p>Pizzakaya is committed to protecting your privacy.</p>
                <p>
                    This Privacy Policy explains how we collect, use, and disclose
                    your personal information when you use the Service.
                </p>
                <p>
                    <b>1. Information We Collect</b> <br /><br />

                    We may collect the following information from you: Contact
                    information, such as your name, email address, phone number, and
                    delivery address. Order information, such as your order history
                    and preferences. Payment information, such as your credit card
                    number. Usage data, such as your IP address, browsing history, and
                    device information.
                </p>
                <p>
                    <b>2. How We Use Your Information</b>
                    <br /><br />

                    We may use your information for the following purposes: To process
                    your orders and provide you with the Service. To send you
                    marketing communications, such as promotional offers and coupons.
                    To personalize your experience on the Service. To improve the
                    Service. To comply with legal and regulatory requirements.
                </p>
                <p>
                    <b>3. Sharing Your Information</b> <br /><br />
                    We may share your information with third-party service providers
                    who help us operate the Service. These service providers are
                    contractually obligated to keep your information confidential and
                    secure. We may also disclose your information if we are required
                    to do so by law.
                </p>

                <p>
                    <b>4. Your Choices </b>
                    <br /><br />

                    You can opt out of receiving marketing communications from us by
                    following the unsubscribe instructions in our emails. You can also
                    access and update your personal information through your account
                    settings.
                </p>
                <p>
                    <b>5. Data Security </b>
                    <br /><br />

                    We take reasonable steps to protect your information from
                    unauthorized access, disclosure, alteration, or destruction.
                    However, no website or internet transmission is completely secure.
                </p>
                <p>
                    <b> 6. Children's Privacy</b>
                    <br /><br />

                    The Service is not intended for children under the age of 13. We
                    do not knowingly collect personal information from children under
                    13.
                </p>
                <p>
                    <b> 7. Changes to this Privacy Policy </b>
                    <br /><br />

                    We may update this Privacy Policy from time to time. We will
                    notify you of any changes by posting the new Privacy Policy on the
                    Service.
                </p>
                <p>

        </div>

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