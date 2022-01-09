<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'blood donation');

$hname=$_POST['hname'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$spoc=$_POST['spoc'];
$spocnumber=$_POST['spocnumber'];


$s="select * from hregistration where hname='$hname' && address='$address' && phone='$phone' && spoc='$spoc' && spocnumber='$spocnumber' ";
$result=mysqli_query($con,$s);

$reg="insert into hregistration (hname,address,phone,spoc,spocnumber) values('$hname','$address','$phone','$spoc','$spocnumber')";

mysqli_query($con,$reg);

header('location:HOSPITAL_ThankYou.php') ;
?>