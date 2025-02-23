
<?php

// Configuration

// Insert questions using multi_query

require "Conn.php";

$c=$nconn->query("CREATE TABLE loop_result (
  id INT,
  qid INT,
  email VARCHAR(255),
  correct_answer VARCHAR(255)
  
)
");
if($c){

echo "created";


}else{
echo $nconn->error;
}


// Close connection
$nconn->close();
?>