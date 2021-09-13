<?php
include("connection.php");
$name=$_POST['Name'];
$regno=$_POST['Regno'];
$s1=$_POST['sub1'];
$s2=$_POST['sub2'];
$s3=$_POST['sub3'];
$s4=$_POST['sub4'];
$s5=$_POST['sub5'];
$s6=$_POST['sub6'];
$t=$s1+$s2+$s3+$s4+$s5+$s6;
$sql2="INSERT INTO `addmarks`(`name`, `regno`, `eng`, `kan`, `se`, `vb`, `unix`, `pd`, `total`) VALUES ('$name','$regno','$s1','$s2','$s3','$s4','$s5','$s6','$t')";
$res=mysqli_query($con,$sql2);
if($res){
    header("location:teachernav.html"); 
}