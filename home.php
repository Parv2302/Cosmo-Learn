<?php
session_start();
if( isset(  $_SESSION['name']  ) )
header("Location: dash.php");

?>

<!DOCTYPE html>
<html>

<head>
  <title>Cosmo-Learn</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="css/signup.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/test.css">
  <link rel="stylesheet" href="css/test2.css">
  <link rel="stylesheet" href="css/slide.css">



</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        
        <a href=#intro><img src="img/logo/logo.png" style="height:65px; width=65px; margin-top:-8px; float:left; "></a>
        <a class="navbar-brand" href="index.html">Cosmo-Learn</a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#download">Downloads</a></li>
          <li><a href="#instructions">Instructions</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#intro">Register</a></li>
          <li><a href="#intro">Login</a></li>
         
         
        </ul>
      </div>
    </div>
  </nav>

  <!-- intro area -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

         <!-- Slide 1 -->
         <div class="item active">
            <div class="carousel-background"><img src="img/home/1.jpg" alt="" ></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Cosmo-Learn</h2>
                <p class="animated fadeInUp">Learn to Understand.</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Begin</a>
                <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn-get-started animated fadeInUp">Login</a>
                <a onclick="document.getElementById('id02').style.display='block'"  style="width:auto;" class="btn-get-started animated fadeInUp">Sign Up</a>
              </div>
            </div>
          </div>
          
   
          

        </div>

      </div>
    </div>
  </section><!-- #intro -->
  <div id="id01" class="modal">
  
      <form class="modal-content animate" action="abeslog.php" method="post">
          <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>
        <div class="container">
          <label style="float:left;" for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="name" required>
    
          <label style="float:left;" for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
            
          <button type="submit">Login</button>

        </div>
    
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn" onclick="document.getElementById('id01').style.display='none'" style="width: auto;
          padding: 10px 18px; background-color: lightgrey;float:left">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>
    
    <div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="login.php" method="post" onSubmit = "return checkPassword(this)">
                  <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                
                    <label style="float:left;" for="full_name"><b>Full Name</b></label>
                    <input type="text" placeholder="Enter Full Name" name="name" required>

                    <label style="float:left;" for="user_name"><b>Username Name</b></label>
                    <input type="text" placeholder="Enter UserName" name="username" required>
          
          
                     <label style="float:left;" for="email"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" required>
                
                    
                    <label style="float:left;" for="phone"><b>Phone Number</b></label>
                    <input type="tel" placeholder="Enter Mobile Number" name="phone" required> 
          
                    <label style="float:left;" for="birthday"><b>Date of Birth</b></label>
                    <input type="date" name="dob" required> 
          
                    <label style="float:left;" for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password1" required>
                
                    <label style="float:left;" for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="password2" required>
                    
                    
                    
                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                
                    <div class="clearfix">
                    <button class="signupbtn" type="submit" >Sign Up</button>
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
       
      </div>
    </div>
  </form>
</div>

    
    <!-- About -->
    
    
    <section id="about" class="home-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <div class="section-heading">
              <h2>About</h2>
              <div class="heading-line"></div>
              <p>This project aims for a better model of education.</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-md-6 about-img">
            <img src="img/about.jpg" alt="">
          </div>
   
          <div class="col-md-6 content">
            <h2>Concept
            </h2>
            <h3>The students shall use an application to scan images related to their concerned topic and the images shall come alive and teach about themselves.
  </h3>
  <h2>Better way of learning</h2>
  <h3>The students would have a better approach to learning as this initiative makes learning a much more intersting process, and they would not feel that education is a burden rather they would enjoy it. 
  </h3>
          </div>
        </div>
      </div>
    </section><!-- #about-->
<<section id="parallax2" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="clients">
            <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#"><img src="img/clients/1.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.6s"><a href="#"><img src="img/clients/2.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.9s"><a href="#"><img src="img/clients/3.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="1.1s"><a href="#"><img src="img/clients/4.png" alt="" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
    <section id="download" class="home-section bg-white">
    <div class="container">
      <h4>Scan The QR Codes To Download The Applications in Your Android Smartphones.</h4>
    <br>
    <br>
    <img src="img/A.png">
    <figcaption><a href="https://drive.google.com/file/d/1qUVt15puMCWkZYZRWY1RM3xr89JW0J7y/view?usp=sharing" style="color:gray; font-size:30px;">DOWNLOAD COSMO-LEARN APP</a></figcaption>
    <img src="img/B.png">
    <figcaption><a href="https://drive.google.com/file/d/1-LChvefnd0giAiohgWddKA31V05z5C5a/view?usp=sharing" style="color:gray; font-size:30px;">DOWNLOAD AR BOOK APP</a></figcaption>
    </section>

    <section id="instructions">
    <h1>How to use the application</h1>

    <hr>

  <p style="font-size:20px; font-style:oblique;">1. Open the application on your android smart phones.</p>
  <br>
  <p style="font-size:20px; font-style:oblique;">2. Now switch to our website or the AR-Book and select the topic you wanna study.</p>
  <br>
  <p style="font-size:20px; font-style:oblique;">3. Now point the camera towards the images to scan them.</p>
  <br>
  <p style="font-size:20px; font-style:oblique;">4. Now you can see those pictures come alive in your android smartphones.</p>
  <br>
  <p style="font-size:20px; font-style:oblique;">5. You can rotate the images and toggle audio by the in-app buttons.</p>
  <br>
  <p style="font-size:20px; font-style:oblique;">6. Happy Learning.</p>
  <br>
  <br>

</section>
    
    
<section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="color-light">
            <h2 class="wow bounceInDown" data-wow-delay="0.5s">Details are the key for perfection</h2>
            <p class="lead wow bounceInUp" data-wow-delay="1s">We mix all detailed things together</p>
          </div>
        </div>
      </div>
    </div>
  </section>     

<section id="team" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Our Team</h2>
            <div class="heading-line"></div>
            <p>These are our team members</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="img/team/1.png" alt="" class="img-circle img-responsive" />
            <h4>Parv Nautiyal</h4>
            <p>Web Development</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/2.png" alt="" class="img-circle img-responsive" />
            <h4>Prakhar Shakya</h4>
            <p>App Development</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/3.png" alt="" class="img-circle img-responsive" />
            <h4>Kush Singh</h4>
            <p>Web Development</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/4.jpg" alt="" class="img-circle img-responsive" />
            <h4>Nikhil Kumar</h4>
            <p>App Development</p>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <p>Copyright &copy; <a href="">Cosmo-Learn</a>| All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



            
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/stellar.js"></script>
   <script src="js/custom.js"></script>
   <script src="js/validatepass.js"></script>
   <script src="js/slide.js"></script>
   <script>
   var modal = document.getElementById('id01');

   // When the user clicks anywhere outside of the modal, close it
   window.onclick = function(event) {
       if (event.target == modal) {
           modal.style.display = "none";
       }
   }
  // Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  
  </script>
  </body>
  </html>