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

    a.hoverme :hover {
      background-color: white;
      color: black;
    }
  </style>
</head>

<body style="background-color: #F9F6F0;">
  <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:black;">
 
  <div class="container-fluid">
 
  <div class="navbar-header">
        <p class="navbar-brand" href="#" style="color: white;font-family: 'Rubik', sans-serif;font-size:25px;line-height:30px"><b>Joyful Burger</b></p>
      </div>


      <ul class="nav navbar-nav navbar-right">
      <li style="color: white;font-family: 'Rubik', sans-serif;font-size:16px; line-height:60px;margin-right:30px"><b><?php  echo @$_SESSION['name']; ?></b></li>  
      <li style="color: white;font-family: 'Rubik', sans-serif;font-size:16px; line-height:60px;margin-right:30px"><b><a href="logout.php" style="color: red;">Logout</a></b></li>
        <li><img src="../page_image/upside_enlarge.png" alt="" class="img-rouned" style="width: 35px;height:35px;margin-top:10px;margin-right:30px"></li>

      </ul>



    </div>
  </nav>

  <div class="container" style="margin-top: 80px;">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="header"><b>Dashboard</b></h3>
        <hr style="border: 2px solid black;">
           </div>
    </div>


    <div class="row">
<div class="col-lg-12">
<a href="" style="background-color: black; padding:20px;color:white;font-family: 'Rubik', sans-serif;font-size:16px;text-decoration:none;border-radius: 10px;">Create Schedule</a>
<a class="hoverme" href="" style="background-color: black; padding:20px;color:white;font-family: 'Rubik', sans-serif;font-size:16px;text-decoration:none;border-radius: 10px;">View Schedule</a>
<a class="hoverme" href="" style="background-color: black; padding:20px;color:white;font-family: 'Rubik', sans-serif;font-size:16px;text-decoration:none;border-radius: 10px;">Search Patient</a>
</div>
    </div>

    <div class="row">
<div class="col-lg-12">

</div>
    </div>


  </div>
</body>

</html>