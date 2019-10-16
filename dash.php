<?php
  session_start();
  if(!isset(   $_SESSION['name']   )  )
          header('location:http://localhost/cosmolearn/dash.php');
   ?>

<!DOCTYPE html>
<html>

<head>
  <title>Cosmo-Learn</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">
  <link href="https://fonts.googleapis.com/css?family=Bevan&display=swap" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">

</head>

<body>

  <!-- Navigation -->


  
  <section id="intro">
       
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="item active">
            <div class="carousel-background"><img src="img/home/0.jpg" alt=""></div> 
            
            <div class="carousel-container">
                    
                <div class="carousel-content">
                <p style="margin-left:-355px; margin-top:-300px; size;font-style: oblique; font-size: 24px;font-family:'Bevan', cursive;"><?php   echo  " WELCOME    :&nbsp; " .  $_SESSION['name'] ;    ?></p>      
                <form action="logout.php" method="post"> <button style="margin-top:-85px;margin-left:1410px; color: white; background-color: rgb(1,193,193); height:50px; width:90px;" name="sub" >Sign Out</button></form>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                <h2 class="animated fadeInDown">Welcome to Cosmo-Learn!</h2>
                <h3 class="animated fadeInUp" style="color:white;">Select Subjects</h3>
                <a href="chemistry.php" class="btn-get-started animated fadeInUp">Chemistry</a>
                <a href="mechanics.php" class="btn-get-started animated fadeInUp">Mechanics</a>
                <a href="biology.php" class="btn-get-started animated fadeInUp">Biology</a>
                <a href="physics.php" class="btn-get-started animated fadeInUp">Physics</a>
                <a href="electrical.php" class="btn-get-started animated fadeInUp">Electrical</a>
               
              </div>
            </div>
          </div>
          
  </section><!-- #intro -->

  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/stellar.js"></script>
   <script src="js/custom.js"></script>
  
</body>
   </html>