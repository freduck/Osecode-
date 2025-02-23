<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    

<table class="table table-striped table-responsive">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Question</th>
      <th scope="col">Option A</th>
      <th scope="col">Option B</th>
      <th scope="col">Option C</th>
      <th scope="col">Option D</th>
      <th scope="col">Correct Answer</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

<?php 


require "Conn.php";
if(isset ($_POST['view'])){


$table=$_POST['table'];


$q=$nconn->query("SELECT* FROM $table");

if($q->num_rows>0){
while ($row=$q->fetch_assoc()){?>


    <tr>
      <th scope="row">
      
      <?php echo $row['id'];?>
      
      </th>
      <td>
      <?php echo $row['question'];?>
      
      
      </td>
      <td>
      
      <?php echo $row['option_a'];?>
      
      </td>
      <td>
      <?php echo $row['option_b'];?>
      
      
      </td>
      <td>
      <?php echo $row['option_c'];?>
      
      
      </td>
      <td>
      <?php echo $row['option_d'];?>
      
      
      </td>
      <td>
      <?php echo $row['correct_answer'];?>
      
      
      </td>
      <td>
      
      
        
        
        <a href="dashboard.php?url=edit&id=<?php echo htmlspecialchars($row['id']);?>&table=<?php echo $table;?>" class="btn btn-success">Edit</a>
        
        
        
        
        
        <a href="dashboard.php?url=delete&id=<?php echo htmlspecialchars($row['id']);?>&table=<?php echo $table;?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    


<?php

}
}
}
?>
</tbody>
</table>
