<?php
include("connection.php");
$regno=$_POST['regno'];
$father=$_POST['Father'];
$mother=$_POST['mother'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$achievement=$_POST['Achivement'];
$sql="INSERT INTO `adddet`(`regno`, `father`, `mother`, `address`, `phone`, `achieve`) VALUES ('$regno','$father','$mother','$address','$phone','$achievement')";
$query=mysqli_query($con,$sql);
if($query){
    header("location:teachernav.html"); 
}