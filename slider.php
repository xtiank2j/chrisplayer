<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/clean-blog.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bastrap.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">        
        <link rel="stylesheet" href="../css/style.css">

        <script src="../js/myown.js"></script>
      <script src="../js/jquery.js"></script>
      <script src="../js/bootstrap.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/clean-blog.js"></script>
      <script src="../js/jqBootstrapValidation.js"></script>
</head>
<body>
<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../images/slider/5.jpg" alt="Los Angeles" class='img-responsive'>
        <div class="carousel-caption">
        <h3>Educational tools</h3>
        <p>Our children demand quality education from us!</p>
      </div>
      </div>

      <div class="item">
        <img src="../images/slider/6.jpg" alt="Chicago" class='img-responsive'>
        <div class="carousel-caption">
        <h3>Woman Abuse</h3>
        <p>The rate of violent among us is alarming!</p>
      </div>
      </div>
    
      <div class="item">
        <img src="../images/slider/7.jpg" alt="New york" class='img-responsive'>
        <div class="carousel-caption">
        <h3>Insecurity</h3>
        <p>The rate at which insecurity has doubbled in  our nation!</p>
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
