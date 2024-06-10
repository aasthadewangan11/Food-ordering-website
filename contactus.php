<?php
session_start();
?>

<html>

  <head>
    <title> Contact Us | FoodMania </title>
      <style>
          .main{
              padding-top: 50px;
              background-image: url('https://st2.depositphotos.com/1265075/7446/i/600/depositphotos_74468913-stock-photo-contact-us-icons-on-cubes.jpg');
  background-repeat: no-repeat;
  background-size: cover;
          }
          
          body,html {
  height: 100%;
 }

.formarea1 {
  background-color: #FAFAFA;
  padding: 10px 40px 60px;
  margin: 10px 0px 60px;
  border: 1px solid GREY;
  opacity:0.9;
}
/*styles for heading before form */
.heading1 {
  text-align: center;
  background-color: lightblue;
    background-blend-mode: multiply;
  padding: 30px;
  font-size: 40px;
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
/*for Heading name "Food Exploria" */
.edit{
  text-shadow: 2px 2px 5px lightgreen;
  color: green;
}


      </style>
  </head>

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--<link rel="stylesheet" type = "text/css" href ="css/contactus.css">-->
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <body class="main">


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
            <li class="active"><a href="contactus.php">Contact Us</a></li>
          </ul>
            
<?php
if (isset($_SESSION['username'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Welcome <?php echo $_SESSION['username']; ?> </a></li>
            <li ><a href="foodlist.php"><i class="fa fa-cutlery" aria-hidden="true"></i> Food Zone </a></li>
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
            <li><a href="register.html"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Sign Up </a>
                
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
    <br>

    <div class="heading1">
     <strong>Loved our Food? Want to contact <span class="edit"> FoodMania </span>?</strong>
     <br>
     We are open to your valuable suggestions and feedbacks.<br> To get in touch, fill the form below..
    </div>

    

    <div class="container" >
    <div class="col-md-5" style="float: none;width: 45em; margin: 0 auto;">
      <div class="formarea1">
        <form method="post" id="fupForm" enctype="multipart/form-data">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Contact Form</h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required autofocus="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email ID" required>
          </div>     
            
        <div class="form-group">
        <label for="file">TO SHARE YOUR EXPERIENCE WITH OTHERS, UPLOAD IMAGE OF DISH ORDERED AND GIVE REVIEW</label>
        <input type="file" class="form-control" id="file" name="file" required />
    </div>

          <div class="form-group">
           <textarea class="form-control" type="textarea" id="message" name="message1" placeholder="Message" maxlength="140" rows="7"></textarea>
           <span class="help-block"><p id="characterLeft" class="help-block">Max Character length : 140 </p></span>
          </div> 
          <input type="submit" name="submit" type="button" id="submit" value="SUBMIT" class="btn btn-success submitBtn"/>    
        </form>

        
      </div>
    </div>
      
    </div>

   

     </body>  
</html>
<script>
$(document).ready(function(e){
    // Submit form data via Ajax
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(response){ //console.log(response);
                $('.statusMsg').html('');
                if(response.status == 1){
                    $('#fupForm')[0].reset();
                    $('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
                    
                    alert(response.message+' Thank you for your Feedback!');
                }else{
                    $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
                    alert(response.message);
                }
                $('#fupForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
            }
        });
    });
});
    
    // File type validation
$("#file").change(function() {
    var file = this.files[0];
    var fileType = file.type;
    var match = ['image/jpeg', 'image/png', 'image/jpg'];
    if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]))){
        alert('Sorry, JPG, JPEG, & PNG files are allowed to upload.');
        $("#file").val('');
        return false;
    }
});
</script>