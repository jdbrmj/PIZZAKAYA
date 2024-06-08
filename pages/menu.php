<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/element-effects.css">
    <link rel="stylesheet" href="../styles/animation.css">
    <link rel="stylesheet" href="../styles/viewport.css">
    <title>Pizzakaya</title>
    <script>
        cartItems = {

        };
    </script>
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
                session_start();
                    include('../widgets/navigation.php'); 
                   ?>
                </ul>
            </nav>
            <div id="nav-button">
                <img src="../buttons/menu.svg" alt="menu" width="20" />
            </div>
        </header>
        <div id="wrapper">
            <main id="menu-content">
                <div id="food">
                    <div class="foods" id="beef-and-cheese" onclick="showDescription(0)">
                        <img src="../page-src/images/beef&cheese.jpg" alt="beef&cheese" height="170">
                        <p class="item">Beef and Cheese</p>
                        <p class="price">₱200</p>
                    </div>
                    <div class="foods" id="ham-and-cheese" onclick="showDescription(1)">
                        <img src="../page-src/images/Ham&Cheese.jpg" alt="Ham&cheese" height="170">
                        <p class="item">Ham and Cheese</p>
                        <p class="price">₱210</p>
                    </div>
                    <div class="foods" id="hawaiian" onclick="showDescription(2)">
                        <img src="../page-src/images/Hawaiian.jpg" alt="hawaiian" height="170">
                        <p class="item">Hawaiian</p>
                        <p class="price">₱150</p>
                    </div>
                    <div class="foods" id="italian" onclick="showDescription(3)">
                        <img src="../page-src/images/italian.jpg" alt="italian" height="170">
                        <p class="item">Italian</p>
                        <p class="price">₱220</p>
                    </div>
                    <div class="foods" id="vegetuna" onclick="showDescription(4)">
                        <img src="../page-src/images/vegan-pizza-tuna-950x950.jpg" alt="vegetuna" height="170">
                        <p class="item">Vegetuna</p>
                        <p class="price">₱200</p>
                    </div>
                    <div class="foods" id="veggie-and-cheese" onclick="showDescription(5)">
                        <img src="../page-src/images/veggie&cheese.jpg" alt="veggie&cheese" height="170">
                        <p class="item">Veggie and Cheese</p>
                        <p class="price">₱190</p>
                    </div>
                </div>
                <div id="cart">
                    <div id="close-cart">
                        <img src="../buttons/close.svg" alt="" height="20">
                    </div>
                    <h1>Your Cart</h1>
                    <p>Select the food that you like in menu list.</p>
                    <div id="items">
                        <?php include("../widgets/save-items.php");
                        foreach($cart_items as $j){
                        ?>
                        <script>
                            cartItems['<?=$j[4]?>'] = ['<?=$j[0]?>', '<?=$j[1]?>',<?= $j[2] ?>,<?= $j[3] ?>,<?= $j[4] ?>,<?= $j[5] ?>];                  
                        </script>
                        <?php
                       }
                    ?>
                    </div>
                    <div id="check-out">
                        <p>Total: <span id="total">₱
                                <?=$value['total'] == '' ? 0 : $value['total'] ?>
                            </span></p>
                        <div id="check-out-button">
                            <p>Checkout</p>
                        </div>
                    </div>
                </div>
                <div id="cart-button">
                    <p>Your Cart</p>
                </div>

        </div>
    </div>
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
    <script>
        if (localStorage.getItem('code') == "%&*#(%*#$(#") {
            if (Object.keys(cartItems).length != 0) {
                window.location.href = '../pages/menu.php';

            }
            localStorage.removeItem('code');
        }

        class user {
            userId;
            constructor(x) {
                this.userId = x;
            }
        }
        var x = new user(<?= $_SESSION['user_id'] ?>);
        var y = x.userId;
    </script>
    <script src="../scripts/menu.js"></script>
    <script src="../scripts/items.js"></script>
    <script src="../scripts/nav.js"></script>
</body>

</html>