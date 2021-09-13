<?php
include("connection.php");
$regno=$_POST['regno'];
$name=$_POST['name'];
$class=$_POST['cls'];
$gen=$_POST['gender'];
$sql="INSERT INTO `addstu`(`regno`, `name`, `cls`, `gender`) VALUES ('$regno','$name','$class','$gen')";
$query=mysqli_query($con,$sql);
if($query){
    header("location:teachernav.html");
}
?>