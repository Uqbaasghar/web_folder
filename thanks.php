<?php include "server.php"?>
<?php
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="cart.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php  if (!isset($_SESSION['username'])) : ?>
    <p align="top-right"> <a href="register.php" style="color: greenyellow;padding:0px;
font-size: 13px;
color: black;
text-align:center;
position: absolute;
top: 10px;
right: 10px;"><u>Register/Login</u></a> </p>
<?php endif ?>

<?php  if (isset($_SESSION['username'])) : ?>
    <p align="top-right" style="color: greenyellow;padding:0px;
font-size: 13px;
color: black;
text-align:center;
position: absolute;
top: -10px;
right: 10px;"><strong><?php echo $_SESSION['username']; ?></strong></p>
    <p align="top-right"> <a href="index.php?logout='1'" style="color: greenyellow;padding:0px;
font-size: 13px;
color: black;
text-align:center;
position: absolute;
top: 20px;
right: 10px;">logout</a> </p>
<?php endif ?>

<p align="right"> <a href="#cart" style="color: greenyellow;padding: 0px;
font-size: 13px;
color: black;
text-align:center;
position: absolute;
top: 10px;
right: 10px;"><i class="fa fa-basket"></i></a> </p>

<div class="header">

        <p ><b><a style="font-size: 30px; color: #000000; font-family: 'Agency FB'" href="index.php">Allure's Beauty</a></b></p>
        
    </div>

<div class="topnav" id="myTopnav">
    <a href="index.php" class="active">Home</a>
    
    <div class="dropdown">
                <button class="dropbtn">Products
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="Foundations.php" target="_blank">Face</a>
                    <a href="eyeliner.php" target="_blank">Eye Makeup</a>
                    <a href="Lipsticks.php" target="_blank">Lip Makeup</a>
                    <a href="Highlighter.php" target="_blank">Tools and accessories </a>
                    
                </div>
            </div>
    



    
</div>



<center align="center" style="text-align: center;top: 50px">Your selected item has been added to cart</strong></center>




</body>
</html>