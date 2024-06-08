var l;

class items {
    static food = [
        ['beef&cheese.jpg', 'Beef and Cheese', `Beef and cheese pizza is a delicious twist on the classic Italian dish,
        combining the savory flavors of beef with the gooey goodness of melted 
        cheese atop a crispy crust. Imagine a golden-brown pizza crust, perfectly baked to crispy per 
        fection, topped with a generous layer of tangy tomato sauce.`, '200'],
        ['Ham&cheese.jpg', 'Ham and Cheese', `Ham and cheese pizza is a delightful twist on the classic Italian dish, 
        combining savory ham and creamy cheese atop a delicious pizza crust. Imagine a 
        golden-brown pizza crust, baked to perfection, adorned with a generous layer of 
        tangy tomato sauce.On top of the sauce, you'll find savory slices of ham, adding a rich 
        and meaty flavor that complements the other toppings perfectly.
        `, '210'],
        ['Hawaiian.jpg', 'Hawaiian', `Hawaiian pizza is a beloved and iconic variation of the 
        classic Italian dish, known for its unique combination of sweet and savory flavors. 
        Imagine a golden crust, baked to perfection and adorned with a layer of tangy tomato sauce. 
        What sets Hawaiian pizza apart is its toppings: succulent pieces of ham and juicy pineapple c hunks. 
        The ham provides a savory and salty element, while the pineapple adds
         a delightful sweetnes that creates a perfect balance of flavors.`, '150'],
        ['italian.jpg', 'Italian', `Italian pizza, often considered the quintessential form 
        of pizza, is a masterpiece of simplicity and flavor that originated in Naples, Italy. 
        Picture a thin, crispy crust, baked to perfection in a wood-fired oven, topped with the 
        freshest and highest quality ingredients. At the heart of Italian pizza is the dough, made from just 
        a few simple ingredients: flour, water, yeast, and salt.`, '220'],
        ['vegan-pizza-tuna-950x950.jpg', 'Vegetuna', `Vegetuna is a clever fusion dish that 
        combines the flavors and textures of vegetarian cuisine with the essence of tuna. 
        In this imaginative creation, traditional tuna is replaced with vegetarian ingredients 
        to cater to those who follow a plant-based diet or simply enjoy innovative culinary experiences. 
        Imagine a dish featuring a base of tender and flaky plant-based protein, carefully seasoned
         and marinated to mimic the taste and texture of tuna. This protein source could be 
         made from ingredients like chickpeas, soy, or jackfruit, artfully crafted 
        to resemble the familiar appearance and mouthfeel of tuna.`, '200'],
        ['veggie&cheese.jpg', 'Veggie and Cheese', `A veggie and cheese pizza is a delectable 
        combination of fresh vegetables and creamy cheese atop a savory pizza crust. Imagine 
        a golden-brown crust, baked to crispy perfection, topped with a vibrant array of colorful 
        vegetables and gooey melted cheese. At the heart of this pizza is a flavorful tomato sauce, 
        made from ripe tomatoes, garlic, and aromatic herbs, providing a tangy and 
        savory base that complements the toppings perfectly.`, '190']
    ];
}

function showDescription(x) {
    var backgroundContainer = document.createElement('div');
    backgroundContainer.className = 'background-container';
    var itemDescription = document.createElement('div');
    itemDescription.className = 'item-description';
    var closeMenuBtn = document.createElement('div');
    closeMenuBtn.className = 'close-menu-btn';
    var img = document.createElement('img');
    img.className = 'close-menu';
    img.alt = "close-menu";
    img.src = "../buttons/close.svg";
    var contentDescription = document.createElement('div');
    contentDescription.className = 'content-description';
    var foodImage = document.createElement('img');
    foodImage.className = 'food-image';
    foodImage.alt = 'food';
    var descriptionCon = document.createElement('div');
    descriptionCon.className = 'description-container';
    var itemName = document.createElement('h1');
    itemName.className = "item_name";
    var descriptionText = document.createElement('p');
    descriptionText.className = 'description-text';
    var price = document.createElement('p');
    price.className = 'item-price';
    var itemBtns = document.createElement('div');
    itemBtns.className = 'item-btns';
    var quantityBtn = document.createElement('div');
    quantityBtn.className = "quantity-btn";
    var add = document.createElement('div');
    add.textContent = "+";
    add.className = "add";
    var quantity = document.createElement('div');
    quantity.className = "quantity";
    quantity.textContent = "1";
    var sub = document.createElement('div');
    sub.textContent = "-";
    sub.className = "sub";
    var selectBtn = document.createElement('div');
    selectBtn.className = "select-btn";
    var selectText = document.createElement('p');
    selectText.textContent = "Select";

    backgroundContainer.appendChild(itemDescription);
    itemDescription.appendChild(closeMenuBtn);
    closeMenuBtn.appendChild(img);
    itemDescription.appendChild(contentDescription);
    contentDescription.appendChild(foodImage);
    contentDescription.appendChild(descriptionCon);
    descriptionCon.appendChild(itemName);
    descriptionCon.appendChild(descriptionText);
    descriptionCon.appendChild(price);
    descriptionCon.appendChild(itemBtns);
    itemBtns.appendChild(quantityBtn);
    quantityBtn.appendChild(add);
    quantityBtn.appendChild(quantity);
    quantityBtn.appendChild(sub);
    itemBtns.appendChild(selectBtn);
    selectBtn.appendChild(selectText);

    document.getElementById('menu-content').appendChild(backgroundContainer);
    foodImage.src = `../page-src/images/${items.food[x][0]}`;
    itemName.textContent = items.food[x][1];
    descriptionText.textContent = items.food[x][2];
    price.textContent = `₱${items.food[x][3]}`;

    var quantityval = 1;

    add.addEventListener('click', () => {

        quantityval++;
        quantity.textContent = quantityval;
    });
    sub.addEventListener('click', () => {
        if (quantityval <= 1) {
            quantityval = 1;
        }
        else {
            quantityval--;
        }

        quantity.textContent = quantityval;
    });

    closeMenuBtn.addEventListener('click', () => {
        document.getElementById('menu-content').removeChild(backgroundContainer);
    });


    selectBtn.addEventListener('click', () => {

        if (y === undefined) {
            window.location.href = "../pages/login.php";
        }
        else {

            document.getElementById('menu-content').removeChild(backgroundContainer);
            var cart = document.createElement('div');
            cart.className = 'cart-item-con';
            var cartimage = document.createElement('img');
            cartimage.className = 'cart-item-image';
            cartimage.src = `../page-src/images/${items.food[x][0]}`;
            var cartText = document.createElement('p');
            cartText.className = 'cart-item-text';
            cartText.textContent = items.food[x][1];
            var cartPrice = document.createElement('p');
            cartPrice.className = 'cart-item-price';
            cartPrice.textContent = `₱${items.food[x][3]}`;
            var cartQuantity = document.createElement('p');
            cartQuantity.textContent = `x${quantity.textContent}`;
            cartQuantity.className = 'cart-item-quantity';
            var removeItem = document.createElement('div');
            removeItem.className = 'remove-cart-con';
            var removeitemimg = document.createElement('img');
            removeitemimg.src = '../buttons/close.svg';
            removeitemimg.className = 'remove-item-img';
            cart.style.animation = "fade-in 0.3s";
            document.getElementById('items').appendChild(cart);
            removeItem.appendChild(removeitemimg);
            cart.appendChild(cartimage);
            cart.appendChild(cartText);
            cart.appendChild(cartPrice);
            cart.appendChild(cartQuantity);
            cart.appendChild(removeItem);
            sendToDb(items.food[x][1], items.food[x][3], quantity.textContent, items.food[x][0], y, 'NOTPAID', removeItem, cart);

            //window.location.href = "../pages/menu.php";
        }

    });

}
function removeItem(x, y) {
    x.style.animation = "fade-out 0.3s";
    delete cartItems[y];
    setTimeout(() => {
        document.getElementById('items').removeChild(x);
    }, 200);

    l = 0;
    Object.values(cartItems).forEach(e => {
        l += e[5];
    });
    document.getElementById('total').textContent = `₱${l}`;
    removeItemDb(y);

    // window.location.href = "../pages/menu.php";
}
function sendToDb(x, y, z, a, b, c, f, g) {
    let items = {
        "item_name": x,
        "price": y,
        "quantity": z,
        "img": a,
        "user_id": b,
        "paycheck": c
    }
    fetch('../widgets/send-item.php', {
        "method": "POST",
        "headers": {
            "Content-Type": "application/json; charset=utf-8"
        },
        "body": JSON.stringify(items)
    }).then((a) => {
        return a.text();
    }).then((d) => {
        cartItems[d] = [b, x, y, z, d, y * z];
        l = 0;
        Object.values(cartItems).forEach(k => {
            l += k[5];
        });

        document.getElementById('total').textContent = `₱${l}`;
        f.addEventListener('click', () => {

            removeItem(g, d);
        });
    });
}
function removeItemDb(x) {
    let item = {
        'item_id': x
    }
    fetch('../widgets/remove-item.php', {
        "method": "POST",
        "headers": {
            "Content-Type": "application/json; charset=utf-8"
        },
        "body": JSON.stringify(item)
    }).then((a) => {
        return a.text();
    }).then((b) => {

    });
}
document.getElementById('check-out-button').addEventListener('click', () => {

    if (y === undefined) {
        window.location.href = '../pages/login.php';
    }
    else {
        checkOut(y);
        window.location.href = '../pages/menu.php';
        code = "%&*#(%*#$(#";

    }
});
document.getElementById('check-out-button').addEventListener('click', () => {

    if (y === undefined) {
        window.location.href = '../pages/login.php';
    }
    else {
        checkOut(y);
        window.location.href = '../pages/menu.php';
        localStorage.setItem('code', "%&*#(%*#$(#");
    }
});

function checkOut(x) {
    let item = {
        'user_id': x
    }
    fetch('../widgets/check-out.php', {
        "method": "POST",
        "headers": {
            "Content-Type": "application/json; charset=utf-8"
        },
        "body": JSON.stringify(item)
    }).then((a) => {
        return a.text();
    }).then((b) => {

    });
}

document.getElementById('cart-button').addEventListener('click', () => {
    document.getElementById('cart-button').style.display = 'none';
    document.getElementById('cart').style.animation = 'slide-up 1s';
    document.getElementById('cart').style.display = 'block';

    document.getElementById('close-cart').addEventListener('click', () => {


        document.getElementById('cart').style.animation = 'slide-down 1s';

        setTimeout(() => {
            document.getElementById('cart-button').style.display = '';
            document.getElementById('cart').style.animation = '';
            document.getElementById('cart').style.display = '';
        }, 900);


    });
});