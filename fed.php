<?php
include("connection.php");
$fs=$_POST['firstname'];
$ls=$_POST['lastname'];
$regno=$_POST['RegNo'];
$cls=$_POST['class'];
$sub=$_POST['subject'];
$sql="INSERT INTO `feedback`(`fs`, `ls`, `regno`, `cls`, `sub`) VALUES ('$fs','$ls','$regno','$cls','$sub')";
$query=mysqli_query($con,$sql);
if($query){
    header("location:index.html");
}
?>