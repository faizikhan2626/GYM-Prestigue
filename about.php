    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Project</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>

    <!-- Navbar -->
    <section id="header">
      <a href="index.php"><img class="logo" src="images/logo.png"
          alt></a>
      <div>
        <ul id="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#shop">Featured</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a  href="blog.php">Blog</a></li>
          <li><a class="active" href="#footer">About</a></li>
          <li><a href="#footer">Contact</a></li>
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
        <section id="AboutUsBanner">
            <h2>#KnowUs</h2>
          <h4>Wellcome to Our About Us Page</h4>
        </section>

        <section id="body">
            <div class="container1">
                <div class="Logo"><img src="images/logo.png" ></div>
                <div class="about">
                    <h3><span>Who Are We?</span></h3>
                    <p style="font-size: 10px;padding-top:0px ;">(Running Strong since <span>1920</span>)</p>
                    <p>"At Gym Prestige, we're more than just a brand – we're a community of fitness enthusiasts dedicated to helping you elevate your workout experience. Founded with a passion for both style and performance, Gym Prestige offers a curated collection of high-quality gym clothes designed to inspire confidence and support your active lifestyle. Our mission is simple: to provide you with premium fitness apparel that not only looks great but also enhances your performance and comfort during every workout. With a focus on innovation, quality craftsmanship, and customer satisfaction, we strive to be your go-to destination for stylish, functional gym wear that empowers you to reach your fitness goals. Join us on our journey to redefine the way you work out – because at Gym Prestige, your success is our ultimate motivation."</p>
                    <br><br><br><br><br><br><br>
                    <marquee width="100%" direction="right" height="70px">
                       70% off on All our Summer Collection till 23rd December 2024
                        </marquee>
                </div>
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
          <script src="script.js"></script>
    </body>
</html>