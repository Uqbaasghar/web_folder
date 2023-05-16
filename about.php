
<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>  
   <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="about.php">
    <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Home</a>
        <a href="about.php" class="active">About</a>
        <a href="contact.php" class="active">contact</a>
       

       
            <div class="dropdown">
                <button class="dropbtn">Products
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="Foundations.php">Face</a>
                    <a href="eyeliner.php">Eye Makeup</a>
                    <a href="Lipsticks.php">Lip Makeup</a>
                    <a href="MakeupBrush.php">Tools and accessories </a>
                    
                </div>
            </div>
            
            <section>
      <div class="grid-flex">
        <img
          class="col col-image"
          style="background-image: url(aboutus.jpeg)"
        />
        <div class="col col-text" style="background-color: #e1cec3">
          <div class="Aligner-item">
            <h1>About</h1>
            <p style="margin-top: 10px; margin-bottom: 10px">
              Beauty For Everybody
            </p>
            <p>
              Everybody deserves to look and beautiful. That’s why at Allure’s
              beauty , we are committed to creating makeup products that cater
              to everyone. Allure’s Makeup is inspired by a love of colour.
              Eye-catching, cutting edge shades inspired by the label’s own
              fashion creations. From show to show , couture and beauty are
              brought together through the makeup looks that we designs
              especially for the occasion
            </p>
          </div>
        </div>
      </div>

    </section>
    
    <footer class="footer-distributed">

<div class="footer-left">

    <h3><span>Alure's beauty</span></h3>


    <!-- <p class="footer-company-name">by</p>

    <p class="footer-links">
        Jannatun Naima
    </p> -->
</div>

<div class="footer-center">

    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>122 Water St, Washington State, America 12345</span>America</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>(123)4567890</p>
    </div>

    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:hello@allurebeauty.com">hello@allurebeauty.com</a></p>
    </div>

</div>

<div class="footer-right">

    <p class="footer-company-about">
        <span>About the company</span>
    
        Allure’s Beauty  is a  multinational retailer of beauty products with nearly  10 brands, along with its own private label, Allure’s Beauty Collection, and includes beauty products such as cosmetics, and beauty tools.
    </p>

    <div class="footer-icons">

        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>


    </div>

</body>
    </html>



           

                
       




    