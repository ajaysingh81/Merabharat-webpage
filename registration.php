<?php
session_start();
header('location:login.php');

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

if($num > 1){
    echo
    "<script> alert('Duplicate data'); </script>";
    
}else{
    $qy = " insert into signin(user, pass) value('$name', '$pass')";
    mysqli_query($con, $qy);

}






?>