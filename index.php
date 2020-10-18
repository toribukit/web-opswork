<!DOCTYPE html>
<html lang="en">
<head>
  <title>LDR Opswork Web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    body {
      background-color:black;
    }
    h2 {
      color: white;
    }
    p {
      color: white;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Lana del Rey Poster</h2>
  <p>Your PHP application is now running on the host &ldquo;<?php echo gethostname(); ?>&rdquo; .</p>
  <p>This host is running PHP version <?php echo phpversion(); ?>.</p>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0"></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item ">
        <img src="images/ldr1.png" alt="NFR" style="width:100%;">
        <div class="carousel-caption">
          <h3>NFR Cover Album Alt</h3>
          <p>This is art work for NFR album!</p>
        </div>
      </div>

      <div class="item active">
        <img src="images/ldr2.png" alt="Bogota" style="width:100%;">
        <div class="carousel-caption">
          <h3>Bogota Music Festival</h3>
          <p>Have so much fun in Colombia!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/ldr3.png" alt="Witch" style="width:100%;">
        <div class="carousel-caption">
          <h3>Witch</h3>
          <p>The only witch we all love!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/ldr4.jpg" alt="LDRXTarantino" style="width:100%;">
        <div class="carousel-caption">
          <h3>LDR X Tarantino</h3>
          <p>What if Pulp Fiction starred by Lana?</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>