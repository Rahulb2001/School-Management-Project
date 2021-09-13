<?php
include("connection.php");
$username = $_POST['user'];
$regno = $_POST['regno'];

$sql = "select *from addstu where regno = '$regno'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1) {
    //  header("location:stunav.html");  
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
}
echo "<style>
.one {
    padding-left: 28px;
    width: 381px;
    height: 566px;
    background-color: rgb(121, 26, 26);
    color: blanchedalmond;
    margin-left: -6px;
    margin-top: 35px;
    padding-top: 22px;
    font-size: 17px;
    border-radius: 100px;
}
</style>";
$r = $_POST['regno'];
$sql = "SELECT * FROM `addmarks` WHERE regno = '$r'";
$query = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($query)) {
?>
    <div class="one">
        <center style="margin-top: 1px; font-size: 40px;">Your Marks </center>
        <br><br>
        <label for="Name">Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</label>
        <input type="text" name="name" id="name" value="<?php echo $row['name'] ?>" style="width: 250px; height: 30px; font-size: 25px" ;>
        <br><br>
        <label for="Regno">RegNo&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</label>
        <input type="text" name="name" id="name" value="<?php echo $row['regno'] ?>" style="width: 250px; height: 30px; font-size: 25px" ;>
        <br><br>
        <label for="English">English&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</label>
        <input type="text" name="name" id="name" value="<?php echo $row['eng'] ?>" style="width: 250px; height: 30px; font-size: 25px" ;>
        <br><br>
        <label for="kannada">Kannada&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</label>
        <input type="text" name="name" id="name" value="<?php echo $row['kan'] ?>" style="width: 250px; height: 30px; font-size: 25px" ;>
        <br><br>
        <label for="SE">SE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</label>
        <input type="text" name="name" id="name" value="<?php echo $row['se'] ?>" style="width: 250px; height: 30px; font-size: 25px" ;>
        <br><br>
        <label for="Name">VB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</label>
        <input type="text" name="name" id="name" value="<?php echo $row['vb'] ?> " style="width: 250px; height: 30px; font-size: 25px" ;>
        <br><br>
        <label for="Name">Unix&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</label>
        <input type="text" name="name" id="name" value="<?php echo $row['unix'] ?>" style="width: 250px; height: 30px; font-size: 25px" ;>
        <br><br>
        <label for="Name">PD&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</label>
        <input type="text" name="name" id="name" value="<?php echo $row['pd'] ?>" style="width: 250px; height: 30px; font-size: 25px" ;>
        <br><br>
        <label for="Name">Total&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</label>
        <input type="text" name="name" id="name" value="<?php echo $row['total'] ?>" style="width: 250px; height: 30px; font-size: 25px" ;>
    </div>

<?php
}
?>
<?php
echo "<style>
.second {
    padding-left: 28px;
    width: 430px;
    height: 383px;
    background-color: rgb(121, 26, 26);
    color: blanchedalmond;
    margin-left: 455px;
    margin-top: -573px;
    padding-top: 22px;
    font-size: 17px;
    border-radius: 100px;
}
</style>";
$sql = "SELECT * FROM `adddet` WHERE regno = '$r'";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query)) {
?>
<div class="second">
        <center style="margin-top: 1px; font-size: 40px;">Your Details </center>
    <label for="Name">RegNo&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</label>
    <input type="text" name="name" id="name" value="<?php echo $row['regno'] ?>" style="width: 250px; height: 30px; font-size: 25px" ;>
    <br><br>
    <label for="Name">Father Name &nbsp&nbsp&nbsp&nbsp&nbsp;</label>
    <input type="text" name="name" id="name" value="<?php echo $row['father'] ?>" style="width: 250px; height: 30px; font-size: 25px" ;>
    <br><br>
    <label for="Name">Mother Name &nbsp&nbsp&nbsp&nbsp&nbsp;</label>
    <input type="text" name="name" id="name" value="<?php echo $row['mother'] ?>" style="width: 250px; height: 30px; font-size: 25px" ;>
    <br><br>
    <label for="Name">Place &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</label>
    <input type="text" name="name" id="name" value="<?php echo $row['address'] ?>" style="width: 250px; height: 30px; font-size: 25px" ;>
    <br><br>
    <label for="Name">Phone &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</label>
    <input type="text" name="name" id="name" value="<?php echo $row['phone'] ?>" style="width: 250px; height: 30px; font-size: 25px" ;>
    <br><br>
    <label for="Name">Achievement &nbsp&nbsp&nbsp&nbsp;</label>
    <input type="text" name="name" id="name" value="<?php echo $row['achieve'] ?>" style="width: 250px; height: 30px; font-size: 25px" ;>
    <br><br>
</div>
<?php
}
?>
<style>
.three {
    width: 320px;
    background-color: #791a1a;
    height: 334px;
    margin-left: 980px;
    margin-top: -391px;
    border-radius: 66px;
    padding: 4px;
}
#b1{
    border-color: violet;
    width: 151px;
    height: 74px;
    margin-top: 25px;
    font-size: 27px;
    background-color: white;
    border-radius: 37px;
}
</style>
<div class="three">
   <center><a href="timetable.html">
  <button id="b1">Time-Table</button></a></center> 
  <br>
  <center><a href="fed.html">
  <button id="b1">Feed-Back</button></a></center> 
  <br>
  <center><a href="index.html">
  <button id="b1">Exit</button></a></center> 
</div>