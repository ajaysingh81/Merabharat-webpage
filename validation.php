<?php
session_start();

$con = mysqli_connect('localhost','root','','merabharat');
if($con){
     echo "connection succesfully....";

}else{
     echo"connection unsuccessfully(no connection)....";
}
mysqli_select_db($con, 'merabharat');

$name = $_POST['user'];
$pass = $_POST['pass'];

$q = "SELECT * FROM signin WHERE user = '$name' && pass ='$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num > 0){
    $_SESSION['username'] = $name;
    header('location:home.php');
    //echo "<script> window.location.assign('home.php'); </script>";
    
}else{
    header('location:login.php');
}

