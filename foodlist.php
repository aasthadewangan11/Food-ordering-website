<?php
session_start();

if(!isset($_SESSION['username'])){
header("location: login.html"); 
}

?>


<html>

  <head>
    <title> Explore | FoodMania </title>
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
  <!--<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">--->
      <style>
          .contact1{
              background: linear-gradient( rgba(0,0,0,0.75),rgba(0,0,0,0),rgba(0,0,0,0),rgba(0,0,0,0.45)),url("https://images.unsplash.com/photo-1502741509793-1bf00d85aeff?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");
              margin-top: 2em;
              margin-bottom: 1em;
              padding-top: 7em;
              font-family: 'Georgia';
              font-size: 25px;
              color: floralwhite;
          }
      </style>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/foodlist.css">
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
            <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                
            </li>

            <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>
      
      <div class="jumbotron">
  <div class="container text-center">
    <h1><b>Explore Our Menu</b></h1>      
    <!--p>Let food be thy medicine and medicine be thy food</p-->
  </div>
</div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">

      <div class="item active">
      <img src="https://cdn.dribbble.com/users/143350/screenshots/14052412/media/27ab3785352e64f357bc1608bae74361.png" style="width:100%; height:600">
      <div class="carousel-caption">
      </div>
      </div>
       
       <!--div class="item">
      <img src="images/home.jpg" style="width:100%;">
      <div class="carousel-caption">

      </div>
      </div-->

      <div class="item">
      <img src="https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/publications/food-beverage-nutrition/beveragedaily.com/article/2019/09/26/new-uk-trade-show-for-low-and-no-alcohol-beverages/10183430-1-eng-GB/New-UK-trade-show-for-low-and-no-alcohol-beverages.jpg" style="width:100%; height:600">
      <div class="carousel-caption">

      </div>
      </div>
      <div class="item">
      <img src="https://images.unsplash.com/photo-1556008531-57e6eefc7be4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width:100%;height:600">
      <div class="carousel-caption">
      </div>
      </div>
        
        <div class="item">
      <img src="https://images.unsplash.com/photo-1527224538127-2104bb71c51b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width:100%;height:600">
      <div class="carousel-caption">
      </div>
      </div>
    
    </div>
   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>

      
<div class="jumbotron">
  <div class="container text-center">
    <h2><b>Appetizers</b></h2>      
    <!--p>Let food be thy medicine and medicine be thy food</p-->
  </div>
</div>






<div class="container" style="width:95%;" >

<!-- Display all Food from food table -->
<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM APPETIZERS WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
<div class="mypanel" align="center";>
<img src="<?php echo $row["images_path"]; ?>" class="img-responsive" style='height:220;'>
<h4 class="text-dark"><?php echo $row["name"]; ?></h4>
<h5 class="text-danger">&#8377; <?php echo $row["price"]; ?> /-</h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
</div>
</form>
      
     
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>

<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! :P</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>
      
      
<div class="jumbotron">
  <div class="container text-center">
    <h2><b>Fast Food</b></h2>      
    <!--p>Let food be thy medicine and medicine be thy food</p-->
  </div>
</div>






<div class="container" style="width:95%;">

<!-- Display all Food from food table -->
<?php

$sql = "SELECT * FROM fastfood WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
<div class="mypanel" align="center";>
<img src="<?php echo $row["images_path"]; ?>" class="img-responsive" style='height:220'>
<h4 class="text-dark"><?php echo $row["name"]; ?></h4>
<h5 class="text-danger">&#8377; <?php echo $row["price"]; ?> /-</h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
</div>
</form>
      
     
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>

<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! :P</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>
      
      
<div class="jumbotron">
  <div class="container text-center">
    <h2><b>Beverages</b></h2>      
    <!--p>Let food be thy medicine and medicine be thy food</p-->
  </div>
</div>





<div class="container" style="width:75%; margin-left:25%;">

<!-- Display all Food from food table -->
<?php

$sql = "SELECT * FROM beverages WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
<div class="mypanel" align="center";>
<img src="<?php echo $row["images_path"]; ?>" class="img-responsive" style='height:220'>
<h4 class="text-dark"><?php echo $row["name"]; ?></h4>
<h5 class="text-danger">&#8377; <?php echo $row["price"]; ?> /-</h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
</div>
</form>
      
     
</div>
    
<?php
$count++;
if($count==3)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>

<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! :P</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>

      
<div class="jumbotron">
  <div class="container text-center">
    <h2><b>Main Course</b></h2>      
    <!--p>Let food be thy medicine and medicine be thy food</p-->
  </div>
</div>






<div class="container" style="width:75%; margin-left:25%;">

<!-- Display all Food from food table -->
<?php

$sql = "SELECT * FROM main WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
<div class="mypanel" align="center";>
<img src="<?php echo $row["images_path"]; ?>" class="img-responsive" style='height:220'>
<h4 class="text-dark"><?php echo $row["name"]; ?></h4>
<h5 class="text-danger">&#8377; <?php echo $row["price"]; ?> /-</h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
</div>
</form>
      
     
</div>

<?php
$count++;
if($count==3)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>

<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! :P</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>
      
      
<div class="jumbotron">
  <div class="container text-center">
    <h2><b>Rice & Noodles</b></h2>      
    <!--p>Let food be thy medicine and medicine be thy food</p-->
  </div>
</div>






<div class="container" style="width:75%; margin-left:25%;">

<!-- Display all Food from food table -->
<?php

$sql = "SELECT * FROM rice WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
<div class="mypanel" align="center";>
<img src="<?php echo $row["images_path"]; ?>" class="img-responsive" style='height:220'>
<h4 class="text-dark"><?php echo $row["name"]; ?></h4>
<h5 class="text-danger">&#8377; <?php echo $row["price"]; ?> /-</h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
</div>
</form>
      
     
</div>

<?php
$count++;
if($count==3)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>

<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! :P</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>
      
      
<div class="jumbotron">
  <div class="container text-center">
    <h2><b>Breads</b></h2>      
    <!--p>Let food be thy medicine and medicine be thy food</p-->
  </div>
</div>






<div class="container" style="width:75%; margin-left:25%;">

<!-- Display all Food from food table -->
<?php

$sql = "SELECT * FROM breads WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
<div class="mypanel" align="center";>
<img src="<?php echo $row["images_path"]; ?>" class="img-responsive" style='height:220'>
<h4 class="text-dark"><?php echo $row["name"]; ?></h4>
<h5 class="text-danger">&#8377; <?php echo $row["price"]; ?> /-</h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
</div>
</form>
      
     
</div>

<?php
$count++;
if($count==3)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>

<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! :P</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>
      
      
<div class="jumbotron">
  <div class="container text-center">
    <h2><b>Desserts</b></h2>      
    <!--p>Let food be thy medicine and medicine be thy food</p-->
  </div>
</div>






<div class="container" style="width:75%; margin-left:25%;">

<!-- Display all Food from food table -->
<?php

$sql = "SELECT * FROM desserts WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
<div class="mypanel" align="center";>
<img src="<?php echo $row["images_path"]; ?>" class="img-responsive" style='height:220'>
<h4 class="text-dark"><?php echo $row["name"]; ?></h4>
<h5 class="text-danger">&#8377; <?php echo $row["price"]; ?> /-</h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
</div>
</form>
      
     
</div>

<?php
$count++;
if($count==3)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>

<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! :P</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>
      
<div class="contact1" style="height: 550px;">
  <div class="end" data-animate-scroll='{"rotationY":"-15", "alpha": "0", "duration": "2","scaleX": "0","scaleY": "0"}'>
<h1 class="font-weight-bold text-center text-white pt-5 last"><b>CONTACT US</b></h1>
<h2 class="font-weight-bold text-center text-white pt-3 pb-4"><b>It's food lovers like you who inspire us to do what we do. Your comments, ideas and questions push us to go that extra mile, every time. So drop us a line!</b></h2>
<center><button class="border border-outline-white btn-lg btn-block" style="width: 200px;"><b><a href="contactus.php" style="text-decoration:none; color: #C71585;">Get In Touch</a></b></button></center>
</div>
</div>

<div class="mt-4 mb-4">
  <p align="center" class="mr-5"><i class="fa fa-facebook-square mr-4" style="font-size: 22px;"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-instagram mr-4" aria-hidden="true" style="font-size: 22px;">&nbsp;&nbsp;&nbsp;</i><i class="fa fa-twitter-square mr-4" aria-hidden="true" style="font-size: 22px;">&nbsp;&nbsp;&nbsp;</i><i class="fa fa-linkedin mr-4" aria-hidden="true" style="font-size: 22px;">&nbsp;&nbsp;&nbsp;</i><i class="fa fa-envelope" aria-hidden="true" style="font-size: 22px;"></i></p>
  <hr>

<p align="center" class="mr-5 mt-3" style="color: #808080;"><b style="font-size: 24px;"><i class="fa fa-cutlery fa-lg ml-5" aria-hidden="true" style="font-size: 22px;"></i>&nbsp;&nbsp;Food Mania</b>&nbsp;&nbsp;&copy;2020</p></p>
</div>


   
</body>
</html>