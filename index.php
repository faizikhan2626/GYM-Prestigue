<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="">
     <!-- Navbar -->
     <section id="header">
        <a href="index.php"><img class="logo" src="images/logo.png"
            alt></a>
        <div>
          <ul id="navbar">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="#shop">Featured</a></li>
            <li><a href="shop.php">Shop</a></li>
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
  
    <!-- Front Page Picture -->
    <section id="hero">
      <h4>Trade-in Offer</h4>
      <h2>Super Value deals</h2>
      <h1>On All Products</h1>
      <p>Save more on coupons upto 70% off!</p>
      <button>Shop Now</button>
    </section>

    <!-- Features of Our Company -->
    <section id="feature">

      <div class="fe-box">
        <img src="images/features/f1.png" alt>
        <h6>Free Shipping</h6>

      </div>
      <div class="fe-box">
        <img src="images/features/f2.png" alt>
        <h6>Online Order</h6>

      </div>
      <div class="fe-box">
        <img src="images/features/f3.png" alt>
        <h6>Save Money</h6>

      </div>
      <div class="fe-box">
        <img src="images/features/f4.png" alt>
        <h6>Promotions</h6>

      </div>
      <div class="fe-box">
        <img src="images/features/f5.png" alt>
        <h6>Happy Sell</h6>

      </div>
      <div class="fe-box">
        <img src="images/features/f6.png" alt>
        <h6>24/7 Support</h6>

      </div>

    </section>


    <div class="container" id="shop">
        <header>
            <div class="title">Featured Items</div>
            
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

    <section id="banner">
      <h4>Repair Services</h4>
      <h2>Up to <span>70% Off</span> - All t-Shirts & Accessories</h2>
      <a href="shop.php"><button class="normal" >Explore More</button></a>
    </section>

 <!-- Bigger Banners  -->
 <section id="sm-banner">
  <div class="banner-box">
    <h4>Crazy Deals!!</h4>
    <h2>Buy One Get One Free</h2>
    <span>The Best Outfits are on Sale at Gym Prestigue</span>
    <a href="shop.php"><button class="white">Learn More</button></a>
  </div>
  <div class="banner-box banner-box2">
    <h4>Summer/Spring</h4>
    <h2>Upcomming Season</h2>
    <span>The Best Outfits are on Sale at Gym Prestigue</span>
    <a href="shop.php"><button class="white">Collection</button></a>
  </div>
</section>

<!-- Smaller Banners -->
<section id="banner3">
  <div class="banner-box">
    <h2>Seasonal Sale</h2>
    <h3>Winter Collection 50% off</h3>
  </div>
  <div class="banner-box banner-box2">
    <h2>New Collection</h2>
    <h3>Slim Fit Shirts</h3>
  </div>
  <div class="banner-box banner-box3">
    <h2>New Arrival</h2>
    <h3>Get Printed Tees</h3>
  </div>

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

    <script src="app.js"></script>
    <script src="script.js"></script>
</body>
</html>