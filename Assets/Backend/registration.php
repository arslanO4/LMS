<?php
include_once 'connection.php';
ob_start();

$fname = $_POST['fname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$department = $_POST['department'];
$role = $_POST['role'];
$password = $_POST['password'];


$s = " select * from lmssignup where uname = '$uname'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  
    echo "<script type='text/javascript'>alert('Username already Taken');</script>";
}
else
{
    $reg = mysqli_query($con, "INSERT INTO lmssignup VALUES ('$fname','$uname','$email','$department','$role','$password')");
    mysqli_query($con, $reg);
    echo "<script type='text/javascript'>alert('Registration Succesfull');</script>";
}

?>