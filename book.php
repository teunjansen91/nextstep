<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<section class="header">
   <!--<img src="images/nextstep-logo.png">-->
   <a href="home.php" class="logo"><img src="images/NextStepLogoKlein.png"></a>

   <nav class="navbar">
      <a href="home.php">HOME</a>
      <a href="about.php">ABOUT</a>
      <a href="package.php">PODCAST</a>
      <a href="articles.php">ARTICLES</a>
      <a href="book.php">INTAKE</a>
      <a href="login_form.php">LOGIN</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/headerbg4.jpg) no-repeat">
   <!--<h1>Plan een intake</h1>-->
</div>

<!-- intake paragraph section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>Vul hieronder je gegevens in:</h3>
      <p>Wanneer dit niet kan of als je dat liever persoonlijk aan ons vertelt, vul dan nog geen reden in voor je aanmelding. Als wij de gewenste datum toevallig nét geen plek hebben laten we je dat even weten en spreken we samen een nieuwe datum af. Tot snel!</p>
   </div>
</section>

<!-- intake paragraph section ends -->


<!-- booking section starts  -->

<section class="booking">

   <!--<h1 class="heading-title">vul hieronder je gegevens in:</h1>-->

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>naam :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>telefoon :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>adres :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>reden intake :</span>
            <input type="text" placeholder="reason you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>gewenste datum :</span>
            <input type="date" placeholder="date of visit" name="guests">
         </div>
      </div>

      <input type="submit" value="Aanmelden" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> podcast</a>
         <a href="articles.php"> <i class="fas fa-angle-right"></i> articles</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> intake</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +31 6 16694006 </a>
         <a href="#"> <i class="fas fa-envelope"></i> info@nextstep.com </a>
         <a href="#"> <i class="fas fa-map"></i> Willemsplein 34-4, Arnhem </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit">Created by <span>Teun Jansen 2022</span> | All rights reserved.</div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
