path = window.location.href;

document.getElementById('close-nav').addEventListener('click', () => {
    document.getElementsByTagName('nav')[0].style.left = '';
    document.getElementsByTagName('nav')[0].style.animation = "";
    if (path.substring(path.lastIndexOf('/') + 1) == 'menu.php') {
        setTimeout(() => {
            document.getElementById('cart-button').style.display = '';
        }, 200);

    }
});
document.getElementById('nav-button').addEventListener('click', () => {
    if (path.substring(path.lastIndexOf('/') + 1) == 'menu.php') {
        document.getElementById('cart-button').style.display = 'none';
    }
    document.getElementsByTagName('nav')[0].style.animation = "slide-In 1.3s";
    document.getElementsByTagName('nav')[0].style.left = "0px";

});

