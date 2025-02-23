<?php 


//

function randomGen($min, $max, $quantity) {
   $numbers = range($min, $max);
   shuffle($numbers);
   return array_slice($numbers, 0, $quantity);
}
$password="PROJECT" . implode('',randomGen(0,12,12));
//   print_r($pass);


//var_dump($_POST);

	extract($_POST);

require "Conn.php";


$insert=mysqli_query($conn,"INSERT INTO users 
        
(`name`,`email`,`phone`, `date_of_birth`,`gender`,`address`,`country`,`city`,`region`, `postal_code`,`password`) 
           VALUES('$name','$email','$phone','$dob','$gender','$address','$country','$city','$region','$postal','$password')");
   if($insert){
    $response=["Response"=>"Registration Successful","password"=>$password];
   // echo json_encode($response);
    print_r($response);
    // echo 1;
   }
else{
echo mysqli_connect_error($conn);
}

       
    
     






?>
