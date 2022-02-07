<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "fehapo";

$conn = new mysqli($hostname,$username,$password,$database_name);
if ($conn->connect_error) {
    die("Coul not establish connection");

}


if (isset($_POST['submit'])) {
    
$patientName = $_POST['patientName'];
$patientAddress = $_POST['patientAddress'];
$patientPhoneNumber = $_POST['patientPhoneNumber'];
$patientFurtherDescription = $_POST['furtherDescription'];





$patientAge = $_POST['patientAge'];


$branchID;

if ($_POST['patientBranch']=="Branch 1") {
    $branchID = 1;
}elseif ($_POST['patientBranch']=="Branch 2") {
    $branchID = 2;
}elseif ($_POST['patientBranch']=="Branch 3") {
    $branchID = 3;
}

$query = "INSERT INTO patient (patient_name, patient_age, branch_id, description) VALUES ('$patientName','$patientAge','$branchID','$patientFurtherDescription');";

mysqli_query($conn,$query);

header("Location: ../pages/dashboard.php");



}



?>