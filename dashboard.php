<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
      h3.header {
            text-align: center;
            font-size: 30px;
            font-family: 'Rubik', sans-serif;
        }
</style>
</head>

<body style="background-color: ivory;">
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:coral">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"style="color: black;font-family: 'Rubik', sans-serif;font-size:25px;"><b>Joyful Burger</b></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#" style="color: black;font-family: 'Rubik', sans-serif; font-size:16px;"><b>Home</b></a></li>
      <li><a href="#"style="color: black;font-family: 'Rubik', sans-serif;font-size:16px;"><b>Announcement</b></a></li>
      <li><a href="#"style="color: black;font-family: 'Rubik', sans-serif;font-size:16px;"><b>View Client</b></a></li>
      <li><a href="logout.php"style="color: black;font-family: 'Rubik', sans-serif;font-size:16px;"><b>Logout</b></a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
        <li style="color: black;font-family: 'Rubik', sans-serif;font-size:16px; line-height:50px;margin-right:10px"><b><?php echo $_SESSION['name']; ?></b></li>
      <li><img src="page_image/upside_enlarge.png" alt="" class="img-rouned" style="width: 35px;height:35px;margin-top:10px;margin-right:10px"></li>
    
    </ul>



  </div>
</nav>
  
    <div class="container" style="margin-top: 80px;">
    <div class="row">
<div class="col-lg-12">
  
<h3 class="header">Interesting Stories</h3>  
  
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
        <img src="carousel/lavender.png" alt="Lavender" style="width:100%;">
      </div>

      <div class="item">
        <img src="carousel/san francisco.png" alt="san franz" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="carousel/shoes.png" alt="Shoes" style="width:100%;">
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
    </div>
    </div>
</body>

</html>