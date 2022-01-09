<?php

session_start();

$con=mysqli_connect('localhost', 'root','');

mysqli_select_db($con, 'blood donation');

$uname = $_POST['uname'];
 $phone = $_POST['phone'];

$s = "select * from register where name = '$uname'";

$result = mysqli_query ($con,$s);

$reg=" insert into register(uname, phone) values ('$uname', '$phone')"; mysqli_query($con, $reg);
header('location:page2.php') ;
?>

