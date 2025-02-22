<?php 

//var_dump($_POST);
extract($_POST);



require "Conn.php";

$login=mysqli_query($conn,"SELECT * FROM admin WHERE email='$username' AND password='$password'");
  if(mysqli_num_rows($login)>0){
    session_start();
    $_SESSION['email']=$username;
   
  header("location:dashboard.php?url=tables");
  }else{
    header ("location: adminLogin.php");
  }

