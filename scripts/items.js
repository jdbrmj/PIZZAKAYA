

Object.values(cartItems).forEach(k => {
    let cartItemCon = document.createElement('div');
    cartItemCon.className = "cart-item-con";
    cartItemCon.id = `item${k[4]}`;
    let cartItemImage = document.createElement('img');
    cartItemImage.src = '../page-src/images/' + k[0];
    cartItemImage.className = "cart-item-image";
    let itemName = document.createElement('div');
    itemName.className = 'cart-item-text';
    itemName.textContent = k[1];
    let price = document.createElement('p');
    price.textContent = `₱${k[2]}`;
    price.className = "cart-item-price";
    let quantity = document.createElement('p');
    quantity.textContent = `x${k[3]}`;
    quantity.className = "cart-item-quantity";
    let buttonCon = document.createElement('div');
    buttonCon.className = 'remove-cart-con';
    buttonCon.id = k[4];
    let buttonImg = document.createElement('img');
    buttonImg.className = 'remove-item-img';
    buttonImg.src = "../buttons/close.svg";

    document.getElementById('items').appendChild(cartItemCon);
    cartItemCon.appendChild(cartItemImage);
    cartItemCon.appendChild(itemName);
    cartItemCon.appendChild(price);
    cartItemCon.appendChild(quantity);
    buttonCon.appendChild(buttonImg);
    cartItemCon.appendChild(buttonCon);

    buttonCon.addEventListener('click', () => {

        removeItem(cartItemCon, buttonCon.id);
    });
});
