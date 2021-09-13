<?php
include("connection.php");  
$username = $_POST['user'];  
$password = $_POST['pass'];
$sql = "select *from teacherlogin where uname = '$username' and psw = '$password'";  
$result = mysqli_query($con, $sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
if($count == 1){  
     header("location:teachernav.html");  
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}
