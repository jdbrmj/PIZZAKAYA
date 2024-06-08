<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['user_id'])){
    $_SESSION['user_id'] = '';
}

$url = $_SERVER['REQUEST_URI'];
$substring = substr($url, 11);

$path = $substring == 'index.php' || $substring == '' ? "./pages/" : "./";
$homepath = $substring == 'index.php' || $substring == '' ? './': "../";
$menu = $_SESSION['user_id'] == '' || $_SESSION['user_id'] == '?)*@{}:)(@' ? array(
array($homepath . "index.php",'Home'),
array($path . "menu.php",'Order Now'), 
array($path . "login.php",'Login'), 
array($path . "sign-up.php",'Sign up'), 
array($path . "about-us.php",'About Us')
) 
:
 array(
    array($homepath  . "index.php",'Home'),
    array($path."menu.php",'Order Now'), 
    array($path."profile.php",'Your Profile'), 
    array($path . "about-us.php",'About Us'),
    array($path."login.php",'Logout'),
);

$menuItems = array(
$menu[0],
$menu[1],
$menu[2],
$menu[3],
$menu[4]
);


foreach ($menuItems as $item) {
    echo '<li><a href="' . $item[0] . '">' . $item[1] . '</a></li>';
}

?>
<script>

</script>