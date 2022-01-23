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

    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "portal";

    $conn = new mysqli($hostname, $username, $password, $database_name);
    if ($conn->connect_error) {
        die("Could not establish a connection");
    }



    ?>
    <div class="container-fluid" style="margin-top: 40px;">

        <div class="row">
            <div class="col-lg-4">

            </div>

            <div class="col-lg-4">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="text" name="name" class="form-control" required placeholder="Name"><br>
                    <input type="text" name="campus" class="form-control" placeholder="Campus"><br>
                    <input type="text" name="year" class="form-control" required placeholder="year"><br>
                    <input type="submit" value="submit" class="btn btn-primary" name="submit">

                </form>

            </div>
            <div class="col-lg-4">

            </div>


        </div>
<?php

if (isset($_POST['submit'])) {
    $txtname = $_POST['name'];
    $txtcampus = $_POST['campus'];
    $txtyear = $_POST['year'];

    $query = "INSERT INTO portal (student_name,student_year,student_campus) VALUES('$txtname','$txtyear','$txtcampus');";

    mysqli_query($conn,$query);
}

?>

    </div>

</body>

</html>