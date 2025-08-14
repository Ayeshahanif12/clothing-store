<?php
$conn = mysqli_connect("localhost", "root", "", "clothing_store");
if (!$conn) { 
    die("Database connection failed: " . mysqli_connect_error());
}

$category =mysqli_query($conn, "SELECT * FROM nav_categories ");
  



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <script src="function.js"></script>
  <title>Trendy Wear</title>
<style>
  /* card css */
  .p-card{
        background-color: antiquewhite;
    padding: 13px;
    width: 25%;
}
.P-container{

    display: flex;
    flex-wrap: wrap;
    justify-content:space-around;
    margin: 20px 0; 
}
</style>
</head>

<body>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <span class="text-muted"></span>
      <ul>
        <li> <a class="links" href="index.html">Home</a></li>
        <li class="nav-item">
          <a class="links" href="#">Categories</a>
          <ul class="type">
            <!-- <li><a href="#cart1">Unstitched</a></li>
            <li><a href="#cart2">Bottoms</a></li>
            <li><a href="#cart3">Pret 3 Piece</a></li>
            <li><a href="#cart4">Luxury Pret</a></li>
            <li><a href="#cart5">Festive Collection</a></li>
            <li><a href="#cart6">Solids</a></li>
            <li><a href="#cart7">Kids</a></li>
            <li><a href="#cart8">Mens</a></li> -->
            <?php
            while ($row = mysqli_fetch_assoc($category)) {
                echo "<li><a href='#cart{$row['id']}'>{$row['name']}</a></li>";
            }
            ?>
          </ul>
        </li>

        <li> <a class="links" href="#policy">Policy</a> </li>
        <li> <a class="links" href="#contactus">Contact us</a> </li>
    </div>
  </div>
  </ul>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false"
        aria-label="Toggle navigation" style="background-color: transparent; border: none;">
        <span class="navbar-toggler-icon" ></span>
      </button>
    </div>
  </nav>


  <nav>
    <h1>Trendy Wear</h1>

    <div class="icons">
      <div class="search-container">
        <i class="fa fa-search"></i>
        <input type="text" class="search-bar" placeholder="Search...">
      </div>
      <div class="shipping-container">
        <i class="fa fa-truck"></i> <!-- Truck Icon -->

        <div class="shipping-sidebar">
          <div class="shipping-header">Shipping Details</div>
          

        </div>
      </div>

      
      <div class="person-icon" >
        <a style="color: white;" href="http://localhost/clothing%20store/signup.php"> <i class="fa fa-user"></i> </a>

    


      </a>
      <div class="cart-container">
       
<button class="btn btn-primary" style="background-color:transparent;border:none;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> <i class="fa fa-shopping-cart"></i> <!-- Cart Icon --></button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">My Cart</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Your cart is currently empty.</p>
  </div>
</div>

    </div>

  </nav>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
    style="position: absolute ; top: 0; width: 100%; z-index: -1; margin-top:50px ;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.limelight.pk/cdn/shop/collections/Printed.jpg?v=1739859797" class="d-block w-100"
          style=" height: 60vh;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.alkaramstudio.com/cdn/shop/files/Banner_2.jpg?v=1741071390&width=1500"
          class="d-block w-100" style=" height: 60vh;" alt="...">
      </div>
      <div class="carousel-item">
        <img
          src="https://nishatlinen.com/cdn/shop/files/eid-test-webBanners-UNSTITCH-FARMHOUSE2.jpg?v=1743654170&width=1500"
          class="d-block w-100" style=" height: 60vh;" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>

  <div id="cat">
    <div class="categories">
      <?php
      $cat = mysqli_query($conn, "SELECT * FROM nav_categories");
      while ($fcat = mysqli_fetch_assoc($cat)) {
          echo "<img src='image/{$fcat['img']}' alt='{$fcat['name']}'><br>";
          echo "<a href='#cart{$fcat['id']}'>{$fcat['name']}</a>";
      }
      ?></div>
  </div>

  <!-- PRODUCT CARD CONTAINER -->
<?php

$cat = mysqli_query($conn, "SELECT * FROM nav_categories");

while ($fcat =mysqli_fetch_assoc($cat)) {
  echo "<div class='P-container' id='cart{$fcat['id']}'>";
  $pro = mysqli_query($conn, "SELECT * FROM products WHERE category_id = {$fcat['id']}");
 while ($rows = mysqli_fetch_assoc($pro)){ ?>
               
                  <div class="p-card">
                        <img src="image/<?php echo  $rows['image'] ;?>" alt="" style="width: 100%; height: auto;">
                        <div class="card-body">
                            <h5 class="card-title"><span style="font-weight: bold; color:#121212; font-size: 18px; font-weight: 500; text-transform:capitalize;"><?php  echo  $rows['name']; ?></span></h5>
                            <p style="color: gray; " class="card-text"><?php  echo  $rows['description']; ?></p>
                            <p style="color: black;" class="card-text"><span style="font-weight: bold;">  </span> <?php  echo $rows['price'] ?></p>
                            <button class="addToCart" onclick="addToCart(<?php  echo $rows['id'] ;?>)">Add to Cart</button>
                        </div>
                    </div>
                
            <?php }
            echo "</div>";
 }?>





      

<!-- POLICY DIV -->
  <div id="policy">
    <section class="privacy-policy">
      <div class="policy-wrapper">
        <h1 class="policy-title">Privacy Policy</h1>
        <p class="policy-intro">
          At <strong>Trendy Wear</strong>, we are committed to protecting your privacy and ensuring that your personal
          information is handled in a safe and responsible manner.
        </p>

        <div class="policy-section">
          <h2>1. Information We Collect</h2>
          <p>We collect personal information including your name, email, shipping address, and payment details when you
            place an order or create an account with us.</p>
        </div>

        <div class="policy-section">
          <h2>2. Use of Information</h2>
          <p>Your information is used to process your orders, improve our services, and communicate updates or
            promotional offers — only if you opt-in.</p>
        </div>

        <div class="policy-section">
          <h2>3. Data Security</h2>
          <p>All data is encrypted and stored securely. We implement strict measures to prevent unauthorized access,
            misuse, or disclosure.</p>
        </div>

        <div class="policy-section">
          <h2>4. Cookies</h2>
          <p>We use cookies to personalize your experience, analyze site traffic, and enhance website functionality. You
            can manage cookies in your browser settings.</p>
        </div>

        <div class="policy-section">
          <h2>5. Third-Party Disclosure</h2>
          <p>We do not sell or trade your personal information. It may be shared only with trusted partners who assist
            us in delivering our services.</p>
        </div>

        <div class="policy-section">
          <h2>6. Your Rights</h2>
          <p>You may request access to, correction of, or deletion of your personal data at any time by contacting us.
          </p>
        </div>

        <p class="policy-footer">
          For any queries, please contact us at <a href="mailto:support@trendywear.com">support@trendywear.com</a>
        </p>
      </div>
    </section>

  </div>

  <!-- CONTACT US  -->
  <div id="contactus">
    <section class="contact-section">
      <div class="contact-wrapper">
        <h2 class="contact-title">Contact Us</h2>
        <form class="contact-form" method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required />
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required />
          </div>

          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" rows="5"name= "message" placeholder="Your Message" required></textarea>
          </div>

          <button type="submit" class="contact-btn" name= "contact">Send Message</button>
        </form>
      </div>
    </section>
  </div>


<!-- CONNECTING CONTACT US WITH PHP -->
<?php
$conn = mysqli_connect("localhost", "root", "", "clothing_store");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['contact'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid Email Address');</script>";
    } else {
        $stmt = mysqli_prepare($conn, "INSERT INTO contact_us (name, email, message) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
        $exe = mysqli_stmt_execute($stmt);

        if ($exe) {
            echo "<script>alert('Message sent successfully!');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }

        mysqli_stmt_close($stmt);
    }
}

mysqli_close($conn);
?>


<!-- FOOTER -->
  <div class="foot">
    <div class="footercontainer">
      <h3 style="margin-top: 7px;">About Trendy Wear</h3>
      <a href="">ABOUT US </a>
      <a href="">COMPANY</a>
      <a href="">CAREERS</a>
      <a href="">BLOGS</a>
      <a href="">STORE LOCATORS</a>
    </div>

    <div class="footercontainer">
      <h3>MY ACCOUNT</h3>
      <a href="login.php">LOGIN</a>
      <a href="signup.php">CREATE ACCOUNT</a>
      <a href="signup.php">ACCOUNT INFO</a>
      <a href="#">ORDER HISTORY</a>
      <a href="#">ORDER HISTORY</a>
    </div>

    <div class="footercontainer">
      <h3 style="margin-top: 1px;">FIND US ON</h3>
      <a href="#">INSTAGRAM</a>
      <a href="#">FACEBOOK</a>
      <a href="#">TWITTER</a>
      <a href="#">WHATSAPP</a>
      <a href="#">YOUTUBE</a>
    </div>
    

    <!-- NEWSLETTER -->
    <div class="footercontainer">
      <h3 style="margin-top: 1px;">SIGN UP FOR UPDATES</h3>
      <P>By entering your email address below, you consent to receiving <br> our newsletter with access to our latest
        collections, events and initiatives. more details on this <br> are provided in our Privacy Policy.</P>
      <form action="" method = "post">
        <input type="email" name="email" id="" placeholder="Email Address">
      <input type="tel" name="whatsapp" id="" placeholder="Whatsapp Number">
      <button class="send-btn" name="subscribe">Subscribe</button>
      </form>
    </div>

  </div>

  <?php

  // CONNECTING NEWSLETTER WITH PHP

// Connect to database
$conn = mysqli_connect("localhost", "root", "", "clothing_store");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['subscribe'])) {
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];

    // Optional: Input Validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email');</script>";
    } elseif (!preg_match('/^\d{11}$/', $whatsapp)) {
        echo "<script>alert('WhatsApp number must be 11 digits');</script>";
    } else {
        // Fix: use correct column name 'whatsappno'
        $stmt = mysqli_prepare($conn, "INSERT INTO newsletter (email, whatsappno) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $email, $whatsapp);
        $exe = mysqli_stmt_execute($stmt);

        if ($exe) {
            echo "<script>alert('Subscription successful');</script>";
        } else {
            echo "<script>alert('Insert failed: " . mysqli_error($conn) . "');</script>";
        }

        mysqli_stmt_close($stmt);
    }
}

mysqli_close($conn);
?>


  <div class="footer">
    <p style="margin-top: 13px; font-size: 26px;">&#169; trendywear copyright 2024</p>
  </div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>