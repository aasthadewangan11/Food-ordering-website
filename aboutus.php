<?php
session_start();
?>

<html>

  <head>
    <title> About | FoodMania </title>
      <style>
      .wide {
  width:100%;
  height:100%;
  height:calc(100% - 1px);
  background:url('https://www.umamicafe.com/wp-content/themes/restaurant-recipe/assets/img/restaurant-recipe-inner-banner-1920-600.jpg');
  background-size:cover;
  opacity: 0.8;
  background-blend-mode: color-burn;
}
          #myBtn{
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}
#myBtn:hover {
  background-color: darkgreen;
  color: white;
}
.wide img {
  width:100%;
  border-radius: 10px;

}

.tagline {
  text-align: center;
  font-size: 50px;
  text-shadow: 2px 2px 10px black;
  color: white;
  font-family: "Times New Roman";
  padding-top: 7%;
}
      </style>
  </head>

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--<link rel="stylesheet" type = "text/css" href ="css/aboutus.css">-->
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="menu2.html">FoodMania</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="flexbox1.html">Home</a></li>
            <li class="active"><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if (isset($_SESSION['username'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Welcome <?php echo $_SESSION['username']; ?> </a></li>
            <li><a href="foodlist.php"><i class="fa fa-cutlery" aria-hidden="true"></i> Food Zone </a></li>
            <li><a href="cart.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="fa fa-sign-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="register.html" ><i class="fa fa-user-circle-o" aria-hidden="true"></i> Sign Up</a>
                
            </li>

            <li><a href="login.html" ><i class="fa fa-sign-in" aria-hidden="true"></i> Login </a>
              
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>

    <div class="wide">
        <center>
        <div class="tagline">It's not our <font color="red"><strong>work life</strong></font>, it's our <font color="green"><strong><em>life's work</em>.</strong></font></div>
        <h2 style="color: white; font-size: 30px;"><b>About the food culture in FoodMania:</b></h2>
        <br>
        <h3 style="color: white; font-size: 25px;"><b>Order food & beverages online from FoodMania. <br><br>We deliver food of all Cuisines! You name it, we are ready to Serve it!<br><br> We ensure that the food we provide is 100% Hygienic and of the best Quality!<br><br><center>Got you a little Hungry? </center><br><br>Here's a good news!<br> We place no minimum order restrictions!<br><br> Order in as little (or as much) as you'd like. We'll Deliver it to you!</b></h3>
            </center>
    </div>

      
         </body>
</html>