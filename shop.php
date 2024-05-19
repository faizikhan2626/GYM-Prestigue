<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <!-- Navbar -->
 <section id="header">
    <a href="index.php"><img class="logo" src="images/logo.png"
        alt></a>
    <div>
      <ul id="navbar">
        <li><a  href="index.php">Home</a></li>
        <li><a href="#shop">Featured</a></li>
        <li><a class="active" href="shop.php">Shop</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#footer">Contact</a></li>
        <li><div class="icon-cart">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
          </svg>
          <span>0</span>
      </div></li>
        

          <a href="#" id="close"><svg xmlns="http://www.w3.org/2000/svg"
              height="22px" viewBox="0 -960 960 960" width="22px"
              ><path
                d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" /></svg></a></li>
      </ul>
    </div>
    <div id="mobile">
      <a href="#" id="bar">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
          fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
        </svg>
      </a>
    </div>


  </section>

   <!-- Banner -->
   <section id="shopBanner">
    <h2>#StayHome</h2>
  <h4>Up to <span>70% Off</span> - All t-Shirts & Accessories</h4>
</section>

    <div class="container" id="shop">
        <header>
            <div class="title">Shop Items</div>
            
        </header>
        <div class="listProduct">

        </div>
    </div>
    <div class="cartTab">
        <h1>Shopping Cart</h1>
        <div class="listCart">
            
        </div>
        <div class="btn">
            <button class="close">CLOSE</button>
            <button class="checkOut">Check Out</button>
        </div>
    </div>

   <!-- Paging  -->
   <section id="pagination">
    <a class="active" href="shop.php">1</a>
    <a href="shop.php">2</a>
    <a href="shop.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-forward-fill" viewBox="0 0 16 16">
      <path d="m9.77 12.11 4.012-2.953a.647.647 0 0 0 0-1.114L9.771 5.09a.644.644 0 0 0-.971.557V6.65H2v3.9h6.8v1.003c0 .505.545.808.97.557"/>
    </svg></a>
  </section>

<!-- newsletter -->
<section id="newsletter">
  <div class="newstext">
    <h4>Sign Up For Newsletters</h4>
    <p>Get Email Updates about our latest shop and <span>Special
        Offers.</span></p>
  </div>
  <div class="forms">
    <input type="text" placeholder="Your Email Here">
    <button class="normal">Submit</button>
  </div>
</section>

<!-- footer -->
<section id="footer">
  <div class="col">
    <a href="#"><img class="logo" src="images/logo.png"></a>
    <h4>Contact</h4>
    <p><strong>Address:</strong> Shop 20, Peshawar Road, Islamabad</p>
    <p><strong>Phone:</strong> +92123456789</p>
    <p><strong>Hours:</strong> 8:00 am - 8:00 pm, Monday-Saturday</p>
    <div class="follow">
      <h4>Follow Us</h4>
      <a href="#"><img src="images/bootstrap-icons-1.11.3/facebook.svg"></a>
      <a href="#"><img
          src="images/bootstrap-icons-1.11.3/twitter-x.svg"></a>
      <a href="#"><img
          src="images/bootstrap-icons-1.11.3/instagram.svg"></a>
      <a href="#"><img src="images/bootstrap-icons-1.11.3/youtube.svg"></a>
    </div>
    <div style="padding-top: 30px;color: gray;"><p>© 2024,Gym Prestigue,Inc.
        All rights reserved</p></div>

  </div>

  <div class="col">
    <h4>About us</h4>
    <a href="#"><p>Delievery Information</p></a>
    <a href="#"><p>Privacy Policy</p></a>
    <a href="#"><p>Terms & Conditions</p></a>
    <a href="#"><p>Contact Us</p></a>
  </div>

  <div class="col">
    <h4>My Account</h4>
    <a href="start.php"><p>Sign In</p></a>
    <a href="#"><p>View Cart</p></a>
    <a href="#"><p>My Wishlist</p></a>
    <a href="#"><p>Track My Order</p></a>
    <a href="#"><p>Help</p></a>
  </div>

  <div class="col">
    <h4>Install App</h4>
    <p>From App Store or Google Store</p>
    <a href="#"><img src="images/footer/Daco_5550859.png" alt></a>
    <p>Secure Payment Gateways</p>
    <a href="#"><img src="images/footer/Daco_3778709.png" alt></a>

  </div>

</section>



<script src="script.js"></script>
    <script >
let listProductHTML = document.querySelector('.listProduct');
let listCartHTML = document.querySelector('.listCart');
let iconCart = document.querySelector('.icon-cart');
let iconCartSpan = document.querySelector('.icon-cart span');
let body = document.querySelector('body');
let closeCart = document.querySelector('.close');
let products = [];
let cart = [];


iconCart.addEventListener('click', () => {
    body.classList.toggle('showCart');
})
closeCart.addEventListener('click', () => {
    body.classList.toggle('showCart');
})

    const addDataToHTML = () => {
    // remove datas default from HTML

        // add new datas
        if(products.length > 0) // if has data
        {
            products.forEach(product => {
                let newProduct = document.createElement('div');
                newProduct.dataset.id = product.id;
                newProduct.classList.add('item');
                newProduct.innerHTML = 
                `<img src="${product.image}" alt="">
                <h2>${product.name}</h2>
                <div class="price">Rs.${product.price}</div>
                <button class="addCart">Add To Cart</button>`;
                listProductHTML.appendChild(newProduct);
            });
        }
    }
    listProductHTML.addEventListener('click', (event) => {
        let positionClick = event.target;
        if(positionClick.classList.contains('addCart')){
            let id_product = positionClick.parentElement.dataset.id;
            addToCart(id_product);
        }
    })
const addToCart = (product_id) => {
    let positionThisProductInCart = cart.findIndex((value) => value.product_id == product_id);
    if(cart.length <= 0){
        cart = [{
            product_id: product_id,
            quantity: 1
        }];
    }else if(positionThisProductInCart < 0){
        cart.push({
            product_id: product_id,
            quantity: 1
        });
    }else{
        cart[positionThisProductInCart].quantity = cart[positionThisProductInCart].quantity + 1;
    }
    addCartToHTML();
    addCartToMemory();
}
const addCartToMemory = () => {
    localStorage.setItem('cart', JSON.stringify(cart));
}
const addCartToHTML = () => {
    listCartHTML.innerHTML = '';
    let totalQuantity = 0;
    if(cart.length > 0){
        cart.forEach(item => {
            totalQuantity = totalQuantity +  item.quantity;
            let newItem = document.createElement('div');
            newItem.classList.add('item');
            newItem.dataset.id = item.product_id;

            let positionProduct = products.findIndex((value) => value.id == item.product_id);
            let info = products[positionProduct];
            listCartHTML.appendChild(newItem);
            newItem.innerHTML = `
            <div class="image">
                    <img src="${info.image}">
                </div>
                <div class="name">
                ${info.name}
                </div>
                <div class="totalPrice">$${info.price * item.quantity}</div>
                <div class="quantity">
                    <span class="minus"><</span>
                    <span>${item.quantity}</span>
                    <span class="plus">></span>
                </div>
            `;
        })
    }
    iconCartSpan.innerText = totalQuantity;
}

listCartHTML.addEventListener('click', (event) => {
    let positionClick = event.target;
    if(positionClick.classList.contains('minus') || positionClick.classList.contains('plus')){
        let product_id = positionClick.parentElement.parentElement.dataset.id;
        let type = 'minus';
        if(positionClick.classList.contains('plus')){
            type = 'plus';
        }
        changeQuantityCart(product_id, type);
    }
})
const changeQuantityCart = (product_id, type) => {
    let positionItemInCart = cart.findIndex((value) => value.product_id == product_id);
    if(positionItemInCart >= 0){
        let info = cart[positionItemInCart];
        switch (type) {
            case 'plus':
                cart[positionItemInCart].quantity = cart[positionItemInCart].quantity + 1;
                break;
        
            default:
                let changeQuantity = cart[positionItemInCart].quantity - 1;
                if (changeQuantity > 0) {
                    cart[positionItemInCart].quantity = changeQuantity;
                }else{
                    cart.splice(positionItemInCart, 1);
                }
                break;
        }
    }
    addCartToHTML();
    addCartToMemory();
}

const initApp = () => {
    // get data product
    fetch('shop-data.json')
    .then(response => response.json())
    .then(data => {
        products = data;
        addDataToHTML();

        // get data cart from memory
        if(localStorage.getItem('cart')){
            cart = JSON.parse(localStorage.getItem('cart'));
            addCartToHTML();
        }
    })
}
initApp();
    </script>
</body>
</html>
