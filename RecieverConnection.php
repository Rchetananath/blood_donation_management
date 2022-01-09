<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'blood donation');

$name=$_POST['name'];
$phone=$_POST['phone'];
$pname=$_POST['pname'];
$hname=$_POST['hname'];
$address=$_POST['address'];
$bloodGroup=$_POST['bloodGroup'];
$qblood=$_POST['qblood'];




$s="select * from receiver where name='$name' && phone='$phone' && pname='$pname' && hname='$hname' && address='$address' && bloodGroup='$bloodGroup' && qblood='$qblood' ";
$result=mysqli_query($con,$s);

$reg="insert into receiver(name,phone,pname,hname,address,bloodGroup,qblood) values('$name','$phone','$pname','$hname','$address','$bloodGroup','$qblood' )";

mysqli_query($con,$reg);

header('location:RECEIVER_ThankYou.php') ;
?>