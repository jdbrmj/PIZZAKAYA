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
                <h2>About Us</h2> <br />
                <p>
                    Welcome to Pizzakaya, where every slice tells a story of tradition, flavor, and
                    passion. Nestled in the heart of Tagum, our pizzeria is more than just a place to eat, it's a
                    culinary journey that celebrates the art of pizza making.
                </p>

                <h3>Our Story</h3>
                <p>
                    Our story begins with a love for pizza that transcends borders and generations. Rick Chapman, a
                    true aficionado of Italian cuisine, embarked on a mission to bring authentic Neapolitan flavors to
                    our Customers. Drawing inspiration from the bustling pizzerias of Naples, Rick Chapman set out to
                    create a slice of Italy right here in Tagum City.<br><br>

                    From sourcing the finest ingredients to perfecting the art of dough tossing, every aspect of our
                    pizzeria reflects our dedication to quality and authenticity. What started as a humble pizzeria has
                    now become a beloved culinary destination, where families, friends, and pizza enthusiasts gather to
                    savor the taste of tradition.
                </p>


                <h3>Our Pizza</h3>

                <p>
                    At Pizzakaya , we take pride in crafting pizzas that are a feast for the senses. Our
                    hand-stretched dough, made from imported Italian flour, forms the perfect canvas for our artisanal
                    creations. Topped with the freshest ingredients, including locally sourced produce and premium
                    meats, each pizza is a symphony of flavors that delights the palate.

                    Whether you're a fan of classic Margherita or crave something more adventurous like our signature
                    BBQ Chicken pizza, our menu offers something for everyone. Every bite is a celebration of
                    authenticity and craftsmanship, transporting you to the cobblestone streets of Naples with every
                    taste.

                </p>

                <h3>Our Promise</h3>

                <p>
                    As stewards of the pizza-making tradition, we are committed to delivering an unparalleled dining
                    experience to our guests. From the moment you walk through our doors to the last bite of your meal,
                    we strive to exceed your expectations with warm hospitality, impeccable service, and of course
                    mouthwatering pizzas. <br><br>

                    Join us at Pizzakaya and experience the magic of pizza done right. Mangia bene, ridi
                    spesso, ama molto. (Eat well, laugh often, love much.)


                    <br><br>
                    Feel free to customize and add more details to suit your restaurant's unique story and offerings!
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