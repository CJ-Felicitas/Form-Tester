<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<h3>Diplay table test</h3>
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "portal";

$connection = new mysqli($hostname, $username, $password, $database_name);
if ($connection->connect_error) {
    die("Could not establish a connection");
}

$sql_query = "SELECT * FROM portal;";
$result = mysqli_query($connection,$sql_query);

// checking the number of rows is not neceessary anymore because we already know that the DB has a data

function create_tableRow($result_in){
    $result = $result_in;
    while ($row = mysqli_fetch_assoc($result)) {
        $student_name = $row['student_name'];
        $student_year = $row['student_year'];
        $student_campus = $row['student_campus'];

        echo "<tr><td>$student_name</td><td>$student_year</td><td>$student_campus</td></tr>";
    }
}

?>
<table class="table table-hover table-bordered">
 <thead>
     <th>Name</th>
     <th>Year Level</th>
     <th>Campus</th>
 </thead>
 <tbody>
     <?php
     
     create_tableRow($result);
     
     ?>
 </tbody>
</table>
</div>
</div>
</div>
</body>

</html>