<?php
session_start();
if(isset($_POST['login'])){
    session_destroy();
}
include_once 'connection.php';
$uname = $_POST['uname'];
$password = $_POST['password'];


$result = mysqli_query($con," SELECT uname from lmssignup where uname = '$uname' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
    while($row = mysqli_fetch_array($result)){
        $name = $row['name'];
    }
    $_SESSION["uname"] = $name;
    $_SESSION["password"] = $password;
    header("location:stdashboard.php");
}
else
header("location:$ref?w=Wrong Username or Password");
?>