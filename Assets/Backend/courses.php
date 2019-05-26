<?php
include_once 'connection.php';
ob_start();

$coursetitle = $_POST['coursetitle'];
$department = $_POST['department'];
$semester = $_POST['semester'];
$year = $_POST['year'];
$courseid = $_POST['courseid'];
$description = $_POST['description'];

$reg = mysqli_query($con, "INSERT INTO courses VALUES ('$coursetitle','$department','$semester','$year','$courseid','$description')");
mysqli_query($con, $reg);
echo "<script type='text/javascript'>alert('Course created succesfully');</script>";

?>