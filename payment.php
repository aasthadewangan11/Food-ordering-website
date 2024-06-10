<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['username'])){
header("location: login.html"); 
}
?>

<html>

  <head>
    <title> Cart | FoodMania </title>
  </head>

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type = "text/css" href ="css/payment.css">
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
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if (isset($_SESSION['username'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Welcome <?php echo $_SESSION['username']; ?> </a></li>
            <li class="active" ><a href="foodlist.php"><i class="fa fa-cutlery" aria-hidden="true"></i> Food Zone </a></li>
            <li><a href="cart.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart  (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>) </a></li>
            <li><a href="logout_u.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="register.html" ><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                
            </li>

            <li><a href="login.html" ><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              
            </li>
          </ul>

<?php
}
?>
      </div>

      </div>
    </nav>

 <?php
$gtotal = 0;
  foreach($_SESSION["cart"] as $keys => $values)
  {

    $F_ID = $values["food_id"];
    $foodname = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
    $total = ($values["food_quantity"] * $values["food_price"]);
    //$R_ID = $values["R_ID"];
    $username = $_SESSION["username"];
    $order_date = date('Y-m-d');
    
    $gtotal = $gtotal + $total;


     $query = "INSERT INTO ORDERS (F_ID, foodname, price,  quantity, order_date, username) 
              VALUES ('" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $username . "')";
             

              $success = $conn->query($query);         

      if(!$success)
      {
        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Something went wrong!</h1>
            <p>Try again later.</p>
          </div>
        </div>

        <?php
      }
      
  }

        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Choose your payment option</h1>
          </div>
        </div>
        <br>
<h1 class="text-center">Grand Total: &#8377;<?php echo "$gtotal"; ?>/-</h1>
<h5 class="text-center">including all service charges. (no delivery charges applied)</h5>
<br>
<h1 class="text-center">
  <a href="cart.php"><button class="btn btn-warning"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Go back to cart</button></a>
  <a href="onlinepay.php"><button class="btn btn-success"><i class="fa fa-credit-card" aria-hidden="true"></i> Pay Online</button></a>
  <a href="COD.php"><button class="btn btn-success"><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</button></a>
</h1>
        


<br><br><br><br><br><br>
        </body>
</html>