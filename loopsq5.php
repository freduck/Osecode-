
<?php
  
$conn= mysqli_connect("localhost","detsconl_projectdb","detsconl_projectdb","detsconl_projectdb");

$sql = "SELECT * FROM loop_questions WHERE id=5";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)> 0) {
  while($row = mysqli_fetch_assoc($result)) 
  { ?>
    <p id='question'><?php echo "<h3>No: ".$row['id']."</h3>".$row["question"];?></p>
   
      <form action="submit3.php" method="post">
        
       <p> <input type="radio" name="choice" value="<?php echo $row['option_a'];?>">
       
       <?php echo $row['option_a'];?>
       </p>
          
       <p>   <input type="radio" name="choice" value="<?php echo $row['option_b'];?>">
       
       <?php echo $row['option_b'];?>
       </p>
          
          <p>  <input type="radio" name="choice" value="<?php echo $row['option_c'];?>">
          
          <?php echo $row['option_c'];?>
          </p>
          
       <p>   <input type="radio" name="choice" value="<?php echo $row['option_d'];?>">
       
       <?php echo $row['option_d'];?>
       
       </p>
       
       <input type="hidden" name="email" value="<?php echo $_SESSION['email'];?>">
       <input type='hidden' name='id' value="<?php echo $row['id'];?>">
            <button type="submit" id="submit-btn">Submit</button>
        </form>
 
 <?php
 
 
 
 
  }
  
  
  }else{
  echo "0 results";
  
  }




?>

  
 