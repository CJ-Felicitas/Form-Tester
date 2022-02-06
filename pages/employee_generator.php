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
    <title>Form Tester</title>
    <style>
        body {
            background-color: white;
        }

        h3.header {
            text-align: center;
            font-size: 30px;
            font-family: 'Rubik', sans-serif;
        }
    </style>
</head>

<body>

    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "fehapo";

    $conn = new mysqli($hostname, $username, $password, $database_name);
    if ($conn->connect_error) {
        die("Could not establish a connection");

    }

    if (isset($_POST['submit'])) {

        $emp_name = $_POST['employee_name'];
        $emp_branch = $_POST['employee_branch'];
        $emp_password = $_POST['employee_password'];
        $emp_email = $_POST['employee_email'];
        
        $query = "INSERT INTO employees (employee_name, employee_email, branch, employee_password)
        VALUES ('$emp_name','$emp_email','$emp_branch','$emp_password');
        ";

        mysqli_query($conn,$query);
        

    }


    ?>
    <div class="container" style="margin-top: 40px;">
    <hr><br>
        <h3 class="header">EMPLOYEE GENERATOR</h3>
        <br><br><br>
        <div class="row">
            <div class="col-lg-4">
                <h1>Welcome</h1><br>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="text" name="employee_name" class="form-control" required placeholder="Employee Name" style="border-radius: 10px; height:50px;font-family: 'Rubik', sans-serif; font-size:18px"><br>

                    <input type="text" name="employee_email" class="form-control" required placeholder="Employee Email" style="border-radius: 10px; height:50px;font-family: 'Rubik', sans-serif; font-size:18px"><br>

                    <select name="employee_branch" id="" style="width: 100%; border-radius:10px; height:50px;font-family: 'Rubik', sans-serif;font-size:18px; margin-bottom:20px; padding:7px" aria-placeholder="BRANCH">
                        <option value="">BRANCH</option>
                        <option value="Branch 1">Branch 1</option>
                        <option value="Branch 2">Branch 2</option>
                        <option value="Branch 3">Branch 3</option>
                    </select>

                    <input type="password" name="employee_password" class="form-control" required placeholder="Password" style="border-radius: 10px;height:50px;font-family: 'Rubik', sans-serif;font-size:18px"><br>

                    <input type="submit" value="REGISTER" class="btn btn-primary" name="submit" style="font-size:18px;font-family: 'Rubik', sans-serif;font-size:18px; height:50px;display:block;margin:auto;width:100%;border-radius:10px">

                </form>
            </div>

            <div class="col-lg-4">
<!-- second column -->

            </div>
            <div class="col-lg-4">

                <img src="page_image/fehapo.png" alt="logo" style="width: 100%; height: 400px;">

            </div>


        </div>


    </div>

</body>

</html>

