<?php
session_start();
if(isset($_SESSION["useremail"])){
    header('location:index.php');
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Believe</title>

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
    <link href='font-awesome/css/font-awesome.css' rel='stylesheet' type='text/css'>
      
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- main css -->
    <link href="style.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    
    <!-- Slider -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet"> 
      
    <!-- lightbox -->
    <link href="css/prettyPhoto.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <div id="wrapper" class="homepage-1"> <!-- wrapper -->
          <div id="header"> <!-- header -->
          <a class="navbar-brand" href="index.php"style="margin-top:-15px" ><img src="images/lo3.png" alt=""></a>
              <div class="top" style="height:100px"> <!-- top -->
                  <div class="container">
                    
                      <ul class="top-support"style="margin-top:20px"> 
                          <li><i class="fa fa-phone-square"></i><span>(+800) 123 456 7890</span></li>
                          <li><a href=""><i class="fa fa-envelope-square"></i><span>info@bootstrapmart.com</span></a></li>
                      </ul>
                      <div class="top-offers"style="margin-top:20px">
                          <div class="alert alert-warning alert-dismissible fade in offers" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                              Free Shipping <a href="">on All Orders Over</a> $75!
                          </div>
                      </div>
                      <div class="top-control"style="margin-top:20px">
                          <a href="register.php"></a><span>•</span><a href="register.php"> Register</a><span>•..</span><a href="login.php">Login</a>
                      </div>
                      <div class="clearfix"></div>
                      <div class="top-offers show-mobile"style="margin-top:20px">
                          <div class="alert alert-warning alert-dismissible fade in offers" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                              Free Shipping <a href="">on All Orders Over</a> $75!
                          </div>
                      </div>
                  </div>
              </div> <!-- top -->
