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
      <li><a href="#"style="color: black;font-family: 'Rubik', sans-serif;font-size:16px;"><b>Logout</b></a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
        <li style="color: black;font-family: 'Rubik', sans-serif;font-size:16px; line-height:50px;margin-right:10px"><b><?php echo $_SESSION['name']; ?></b></li>
      <li><img src="page_image/upside_enlarge.png" alt="" class="img-rouned" style="width: 35px;height:35px;margin-top:10px;margin-right:10px"></li>
    
    </ul>



  </div>
</nav>
  
    <div class="container">
    <div class="row">
<div class="col-lg-12">

</div>
    </div>
    </div>
</body>

</html>