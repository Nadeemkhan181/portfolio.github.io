

<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Food-Corner</title>
  <!-- Font Awesome -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="_custom-style.scss" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
@font-face {
  font-family: myfonts;
  src: url(Nexa-Light.otf);
}
@font-face {
  font-family: myfont;
  src: url(GrandHotel-Regular.otf);
}
body{
font-family: myfonts;
background-image: url(bread-color-copyspace-1565982.jpg);
background-size: cover;
background-repeat: no-repeat;
background-attachment: fixed;
background-position: center;
}
#container1{
  height: 750px;
            background-image:url(beef-blur-close-up-1639563.jpg);
            background-size:cover;
            background-repeat: no-repeat;
            margin-top: 0px;
            background-position: center;
            margin-bottom: 0%;
}
#col6{
  height: 500px;
            background-image:url(adults-chef-cook-2696064.jpg);
            background-size:cover;
            background-repeat: no-repeat;
    margin-top: -64px;
    margin-right: -10px;
    padding: 10px;
          
}
#col5{
  height: 500px;
            background-image:url(appetizers-chef-dining-2814829.jpg);
            background-size:cover;
            background-repeat: no-repeat;
    margin-bottom: 0%;
    margin-right: -10px;
    padding: 10px;
          
}
@media only screen and (max-width: 700px){
  .navbar-brand{
    display: none;
  }
}
.dropdown-item:hover{
  background-color: black;
  a{
    color: white;
  }
}
</style>
<body>


    <nav class="navbar navbar-expand-lg navbar-light  fixed-top" id="navbar12" style="margin-top: 10px; background-color: transparent;">
        <a class="navbar-brand" href="#" style="color: white;font-weight: bold;margin-left: 90px;">FOOD CORNER]]]</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
      aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" style="color: white;padding: 2px;">
    <span class="navbar-toggler-icon" ></span>
  </button>
      
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01" >
        
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="navbars">
        
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;transition: 0.5s;font-family: myfonts;" data-target="#about">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#" style="color: white;transition: 0.5s;font-family: myfonts;" style="border-bottom:1px solid white">OUR MENU </a>
          </li>
            <li class="nav-item">
            <a class="nav-link " href="#" style="color: white;transition: 0.5s;font-family: myfonts;">SPECIAL OFFER</a>
          </li>
     
          <li class="nav-item">
        <a class="nav-link" href="#" style="color: white;transition: 0.5s;font-family: myfonts; " data-toggle="modal" data-target="#cart"><i class="fas fa-shopping-cart"></i>My Cart (<span class="total-count"></span>)</a>
        </li>

        <li class="dropdown">
     
      <a class=" dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" style="color: white;transition: 0.5s;font-family: myfonts;margin-top: 22px;margin-left: 280px;font-size: 15px;">
        <?php  if (isset($_SESSION['username'])) : ?>
        <font style="margin-right: 10px;">Welcome</font><?php echo $_SESSION['username']; ?>
      </a>
        
    <div class="dropdown-menu dropdown-menu-right dropdown-default"
        aria-labelledby="navbarDropdownMenuLink-333">
        <a class="dropdown-item" href="#">Profile</a>
        <a class="dropdown-item" href="index.php?logout='1'" >Logout</a>
      
        <?php endif ?>
</div>

      
      
  

         </div>
         </li>
         </ul>
    </nav>
        
        <div class="jumbotron text-center" id="container1">
            <svg class="svganime" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="30%" style="margin-top: 70px;">
  
              <!-- Background -->
              
              
              <!-- Text using the #pattern in defs as the fill -->
              <text x="50%" text-anchor="middle" y="50%" dy="0.4em" fill="url(#pattern)" font-family="myfont" font-size="10vh" font-weight="bold">FOOD CORNER</text>
              
              <defs>  
                <!-- Da gradient -->
                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0">
                  <stop offset="0%" style="stop-color:rgb(247, 162, 72);"/>
  
                  <stop offset="100%" style="stop-color:#eeebe9;"/>
                </linearGradient>
                
                <!-- Stitch 2 gradients together for seamless animation  -->
                <pattern id="pattern" x="0" y="0" width="300%" height="100%" patternUnits="userSpaceOnUse">
                  <rect x="0" y="0" width="150%" height="100%" fill="url(#gradient)">
                    <animate attributeType="XML"
                             attributeName="x"
                             from="0" to="150%"
                             dur="7s"
                             repeatCount="indefinite"/>
                  </rect>
                  <rect x="-150%" y="0" width="150%" height="100%" fill="url(#gradient)">
                    <animate attributeType="XML"
                             attributeName="x"
                             from="-150%" to="0"
                             dur="7s"
                             repeatCount="indefinite"/>
                  </rect>
                </pattern>
            
             
              
              </defs>
            </svg>
              <h6 class="tag text=center" style="font-family: myfonts;color:white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h6>
              <br>
              <button class="text-center" id="btn" style="border-radius: 40px;">SEE OUR MENU</button>
</div>


<div class="jumbotron text-center" id="jumbo1" style="height: 100%;">

<div class="row">
<div class="col-md-6 mb-md-0 mb-5" >
  <br>
<h2 class="text-center" style="margin-top: 20px;color:black;font-family: myfont" data-aos="fade-right"  data-aos-duration="2000" id="about">About us</h2><br>
<p class="text-center" style="color: grey;font-size:16px;font-weight: bold;" data-aos="fade-right"  data-aos-duration="2000">
  Our Chefs offer you perfect cooking, best served dishes with fresh<br> ingredients and old recipes. We have only carefully sourced and<br> seasonal ingredients in our disposal to make rustic dishes. We provide<br> you with daily self-made bread, sourdough pizza, roasted <br>fish-meat-vegetables and many more.
 </p>
<button class="text-center" id="btn2" data-aos="fade-right"  data-aos-duration="2000" style="border-radius: 40px;">SEE MORE</button>
</div>
<div class="col-md-6 mb-md-0 mb-5 " id="col6" data-aos="fade-left"  data-aos-duration="2000">

  
</div>
</div>

</div>



<div class="jumbotron" style="height:100%;background-color: white; width: 100%;margin-bottom: 0%;">
  <div class="row" data-aos="fade-up"  data-aos-duration="2000">
    <div class="col-md-4 mb-md-0 mb-5">
      <div class="card">
      
<img class="card-img-top" src="bread-delicious-dinner-1603901.jpg" alt="Card image cap" >
<div class="card-block">
  <h4 class="card-title" >Veg Burger</h4>
  <p class="card-text">Price: $50.5</p>
  <a  href="#" data-name="Veg Burger" data-price="50.5" class="add-to-cart btn btn-primary" >Order now</a>
</div>
</div>
    </div>
    <div class="col-md-4 mb-md-0 mb-5">
      <div class="card">
<img class="card-img-top" src="food-food-photography-meal-769290.jpg" alt="Card image cap" style="height: 200px;">
<div class="card-block">
  <h4 class="card-title">Cake</h4>
  <p class="card-text">Price: $20.22</p>
  <a href="#" data-name="Cake" data-price="20" class="add-to-cart btn btn-primary">Order now</a>
</div>
</div>
    </div>
    <div class="col-md-4 mb-md-0 mb-5">
      <div class="card" >
<img class="card-img-top" src="buffet-chicken-delicious-5938.jpg" alt="Card image cap">
<div class="card-block">
  <h4 class="card-title">Chiken Roast</h4>
  <p class="card-text">Price: $30</p>
  <a href="#" data-name="Chiken Roast" data-price="30" class="add-to-cart btn btn-primary">Order now</a>

</div>
</div>
    </div>
  </div>
  <br>
  <div class="row" data-aos="fade-up"  data-aos-duration="2000">
    <div class="col-md-4 mb-md-0 mb-5">
      <div class="card">
      
<img class="card-img-top" src="bread-delicious-dinner-1603901.jpg" alt="Card image cap" >
<div class="card-block">
  <h4 class="card-title" >Veg Burger</h4>
  <p class="card-text">Price: $50.5</p>
  <a  href="#" data-name="Veg Burger" data-price="50.5" class="add-to-cart btn btn-primary" >Order now</a>
</div>
</div>
    </div>
    <div class="col-md-4 mb-md-0 mb-5">
      <div class="card">
<img class="card-img-top" src="food-food-photography-meal-769290.jpg" alt="Card image cap" style="height: 200px;">
<div class="card-block">
  <h4 class="card-title">Cake</h4>
  <p class="card-text">Price: $20.22</p>
  <a href="#" data-name="Cake" data-price="20" class="add-to-cart btn btn-primary">Order now</a>
</div>
</div>
    </div>
    <div class="col-md-4 mb-md-0 mb-5">
      <div class="card" >
<img class="card-img-top" src="buffet-chicken-delicious-5938.jpg" alt="Card image cap">
<div class="card-block">
  <h4 class="card-title">Chiken Roast</h4>
  <p class="card-text">Price: $30</p>
  <a href="#" data-name="Chiken Roast" data-price="30" class="add-to-cart btn btn-primary">Order now</a>

</div>
</div>
    </div>
  </div>
</div>
</center>

<!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <table class="show-cart table">
      <p id="demo"></p>
      </table>
      <div>Total price: $<span class="total-cart"></span></div>
    </div>
    <div class="modal-footer">
    <button class="clear-cart btn btn-danger">Clear Cart</button></div>
      <button type="button" class="btn btn-warning">Order now</button>

    </div>
  </div>
</div>
</div> 





<script>
	AOS.init();
  </script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js">
  
  </script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
