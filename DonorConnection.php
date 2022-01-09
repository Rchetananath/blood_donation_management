<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'blood donation');

$name=$_POST['name'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$bloodGroup=$_POST['bloodGroup'];
$address=$_POST['address'];


$s="select * from donor where name='$name' && phone='$phone' && mail='$mail' && bloodGroup='$bloodGroup' && address='$address' ";
$result=mysqli_query($con,$s);

$reg="insert into donor(name,phone,mail,bloodGroup,address) values('$name','$phone','$mail','$bloodGroup','$address')";

mysqli_query($con,$reg);

header('location:DONOR_ThankYou.php') ;
?>