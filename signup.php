<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create Account - Trendy Wear</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="main.css" />
</head>

<body>

  <!-- Navbar -->
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <ul>
        <li><a class="links" href="index.html">Home</a></li>
        <li class="nav-item">
          <a class="links" href="#">Categories</a>
          <ul class="type">
            <li><a href="#cart1">Unstitched</a></li>
            <li><a href="#cart2">Bottoms</a></li>
            <li><a href="#cart3">Pret 3 Piece</a></li>
            <li><a href="#cart4">Luxury Pret</a></li>
            <li><a href="#cart5">Festive Collection</a></li>
            <li><a href="#cart6">Solids</a></li>
            <li><a href="#cart7">Kids</a></li>
            <li><a href="#cart8">Mens</a></li>
          </ul>
        </li>
        <li><a class="links" href="#policy">Policy</a></li>
        <li><a class="links" href="#contactus">Contact us</a></li>
      </ul>
    </div>
  </div>

  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Signup Form -->
  <form action="" method="post">
    <div class="signup">
      <h1 id="account">Create Account</h1>
      <input type="text" placeholder="First Name" name="Fname" required />
      <input type="text" placeholder="Last Name" name="Lname" required />
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <button id="create" name="create">Create</button>
      <p style="margin-top: 20px;" class="sign">
        Already have an account?
        <a style="font-size: 15px;" href="login.html">LOGIN</a>
      </p>
    </div>
  </form>

  <?php
  // Database connection
  $conn = mysqli_connect("localhost", "root", "", "clothing_store");

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST['create'])) {
      $Fname = $_POST['Fname'];
      $Lname = $_POST['Lname'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $insert = "INSERT INTO users (fname, lname, email, password) 
                 VALUES ('$Fname', '$Lname', '$email', '$password')";
      $exe = mysqli_query($conn, $insert);

      if ($exe) {
          echo "<script>alert('Account Created Successfully!');</script>";
      } else {
          echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
      }
  }
  ?>

  <!-- Footer -->
  <div class="foot">
    <div class="footercontainer">
      <h3 style="margin-top: 7px;">About Trendy Wear</h3>
      <a href="#">ABOUT US</a>
      <a href="#">COMPANY</a>
      <a href="#">CAREERS</a>
      <a href="#">BLOGS</a>
      <a href="#">STORE LOCATORS</a>
    </div>

    <div class="footercontainer">
      <h3>MY ACCOUNT</h3>
      <a href="login.html">LOGIN</a>
      <a href="signup.php">CREATE ACCOUNT</a>
      <a href="#">ACCOUNT INFO</a>
      <a href="#">ORDER HISTORY</a>
    </div>

    <div class="footercontainer">
      <h3>FIND US ON</h3>
      <a href="#">INSTAGRAM</a>
      <a href="#">FACEBOOK</a>
      <a href="#">TWITTER</a>
      <a href="#">WHATSAPP</a>
      <a href="#">YOUTUBE</a>
    </div>

    <div class="footercontainer">
      <h3>SIGN UP FOR UPDATES</h3>
      <p>By entering your email address below, you consent to receiving <br />
        our newsletter with access to our latest collections, events and initiatives. More details on this <br />
        are provided in our Privacy Policy.</p>
      <input type="email" placeholder="Email Address" />
      <input type="tel" placeholder="Whatsapp Number" />
      <button class="send-btn">Send</button>
    </div>
  </div>

  <div class="footer">
    <p style="margin-top: 13px; font-size: 26px;">&#169; Trendy Wear copyright 2024</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
