 <link rel="stylesheet" href="bootstrap.min.css">

<?php

//require "Conn.php";

$conn= mysqli_connect("localhost","detsconl_projectdb","detsconl_projectdb","detsconl_projectdb");



//"system/class.php";
if(isset($_POST['send'])){
extract ($_POST);

$insert=mysqli_query($conn,"INSERT INTO feed_back (email, request) VALUES('$email','$review')");
if($insert){
echo "<p class='text-center fs-1'>Review Sent <br/><a href='profile.php?url=feedback' class='text-center'>Click here to go back</a></p>";

}

}



?>

<style>
p{
padding:30px;
font-size:28px;

}

</style>