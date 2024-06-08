<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/main.css" />
    <link rel="stylesheet" href="styles/viewport.css" />
    <link rel="stylesheet" href="styles/animation.css">
    <link rel="stylesheet" href="styles/element-effects.css">
    <script src="scripts/page-check.js"></script>

    <title>Pizzakaya</title>
</head>

<body>
    <div>
        <header>
            <a href="index.php">
            <img src="./page-src/images/download.png" alt="logo" width="110" />
            </a>
            <nav>
                <div id="close-nav">
                    <img src="buttons/close.svg" alt="close-button" height="20">
                </div>
                <ul>
                    <?php
                include('./widgets/navigation.php');
                ?>
                </ul>
            </nav>
            <div id="nav-button">
                <img src="buttons/menu.svg" alt="menu" width="20" />
            </div>
        </header>
        <div id="wrapper">
            <main id="index-content">
                <div>
                    <div id="image" alt="home-hero">
                        <h1>Welcome to Pizzakaya</h1>
                    </div>
                </div>
                <div id="index-text-content">
                    <div id="About-us">
                        <h2>Introduction</h2>
                        <p>
                            Pizzakaya is a family-owned restaurant dedicated to serving the
                            best pizza in town. Our recipes have been passed down through
                            generations, ensuring that every slice is bursting with flavor
                            and made with love.
                        </p>
                        <br>
                    </div>
                    <div>
                        <p>
                            <span>Order Online<span class="index-content-colon">:</span></span>
                            Browse our menu and place your order for pickup or delivery.
                            Enjoy the convenience of ordering from the comfort of your home.
                        </p>
                        <p>
                            <span>Special Deals<span class="index-content-colon">:</span></span>
                            Check out our current promotions and discounts. Save on your
                            favorite pizzas and sides with our exclusive offers.
                        </p>
                        <p>
                            <span>Menu<span class="index-content-colon">:</span></span> Explore
                            our delicious selection of pizzas, pastas, salads, and sides.
                            From classic pepperoni to gourmet specialty pizzas, we have
                            something for everyone.
                        </p>
                        <p>
                            <span>Contact Us<span class="index-content-colon">:</span></span> 09534625281
                        </p>
                    </div>
                    <div id="menu-button" onclick="window.location.href = 'pages/menu.php';">
                        <p>View Pizza Menu</p>
                    </div>
                </div>
            </main>
            <br /><br />
        </div>

        <footer>
            <div id="Help-Information">
                <ul>
                    <li class="footer-title"><span>Help & Information</span></li>
                    <li><a href="pages/terms.php">Terms & Conditions</a></li>
                    <li><a href="pages/privacy.php">Privacy Policy</a></li>
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
<script src="scripts/nav.js"></script>

</html>