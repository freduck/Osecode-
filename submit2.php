<?php
require "Conn.php";


//var_dump($_POST);
extract($_POST);
$choice=mysqli_real_escape_string($conn,$choice);
$check=mysqli_query($conn,"SELECT *FROM if_answer WHERE qid='$id' AND email='$email'");
if(mysqli_num_rows($check)>0){
echo "<script> alert('This Question Has Been Answered'); window.location='profile.php?url=ifstaments';</script>";
exit ();
}
$insert=mysqli_query($conn,"INSERT INTO if_answer (qid, email,correct_answer)VALUES('$id','$email','$choice')");
if($insert){

header("location:profile.php?url=ifstaments");
}else{
 echo mysqli_error($conn);

}

?>