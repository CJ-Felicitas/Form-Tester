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
    <link rel="preconn  ect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tester</title>
    <style>
        body {
            background-color: white;
        }

        h3.header {
            text-align: center;
            font-size: 50px;
            font-family: 'Rubik', sans-serif;
        }
        h3.navbar {
            text-align: center;
            font-size: 40px;
            font-family: 'Rubik', sans-serif;
        }
        h4.top{
            margin-left: 5px;
            font-size: 20px;
            font-family: 'Rubik', sans-serif;
        }
    </style>
</head>

<body style="background-color: ivory;">

    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "fehapo";

    $conn = new mysqli($hostname, $username, $password, $database_name);
    if ($conn->connect_error) {
        die("Could not establish a connection");
    }



    ?>
    <div style="background-color: coral; width: 100%; height: 50px;">
   
<p style="text-align: left; font-family: 'Rubik', sans-serif; color:black;font-size:25px;line-height:50px;text-indent:30px"><b>Joyful Burger</b></p>
    </div>

    <div class="container">
        
        <h3 class="header"><b>Joyful Burger Services</b></h3>
        <br><br><br>
        <div class="row">
            <div class="col-lg-4">
                <h1>Welcome</h1><br>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="text" name="employee_id" class="form-control" required placeholder="Employee ID" style="border-radius: 10px; height:50px;font-family: 'Rubik', sans-serif; font-size:18px"><br>


                    <select name="branch" id="" style="width: 100%; border-radius:10px; height:50px;font-family: 'Rubik', sans-serif;font-size:18px; margin-bottom:20px; padding:7px" aria-placeholder="BRANCH">
                        <option value="">Select Branch</option>
                        <option value="Branch 1">Branch 1</option>
                        <option value="Branch 2">Branch 2</option>
                        <option value="Branch 3">Branch 3</option>
                    </select>

                    <input type="text" name="password" class="form-control" required placeholder="Password" style="border-radius: 10px;height:50px;font-family: 'Rubik', sans-serif;font-size:18px"><br>
                    <input type="submit" value="Login" class="btn btn-primary" name="submit" style="font-size:18px;font-family: 'Rubik', sans-serif;font-size:18px; height:50px;display:block;margin:auto;width:100%;border-radius:10px">


                    <?php

                    if (isset($_POST['submit'])) {
                        $employee_id = $_POST['employee_id'];
                        $branch = $_POST['branch'];
                        $password = $_POST['password'];
                        $error_message = "";


                        $query = "SELECT * FROM employees WHERE employee_id='$employee_id';";
                        $result = $conn->query($query);
                        $row = $result->fetch_assoc();



                        if (@$row['employee_id'] == $employee_id and $row['branch'] == $branch and $row['employee_password'] == $password) {
                            session_start();
                            $_SESSION['name'] = $row['employee_name'];
                            header("Location: dashboard.php?LoginSuccess");
                        } else {

                            echo "<br><div class='alert alert-danger' style='font-size:18px;font-family: 'Rubik', sans-serif;font-size:18px; height:50px;display:block;margin:auto;width:100%;border-radius:10px'>
    Credentials not <strong>found</strong>
  </div>";
                        }
                    }

                    ?>



                </form>
            </div>

            
            <div class="col-lg-8">

                <img src="page_image/upside_enlarge.png" alt="logo" style="width: 60%; height: 500px; margin-left:40%">

            </div>


        </div>



    </div>

</body>

</html>