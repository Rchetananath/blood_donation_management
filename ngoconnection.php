<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'blood donation');

$nname=$_POST['nname'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$lno=$_POST['lno'];
$spoc=$_POST['spoc'];
$spocnumber=$_POST['spocnumber'];


$s="select * from ngoregistration where nname='$nname' && address='$address' && phone='$phone' && lno='lno' && spoc='$spoc' && spocnumber='$spocnumber' ";
$result=mysqli_query($con,$s);

$reg="insert into ngoregistration(nname,address,phone,lno,spoc,spocnumber) values('$nname','$address','$phone','$lno','$spoc','$spocnumber')";

mysqli_query($con,$reg);

header('location:NGO_ThankYou.php') ;
?>