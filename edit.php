


<?php 


require "Conn.php";
if(isset($_GET['id'])){

$id=$_GET['id'];
$table=$_GET['table'];
}
$q=$nconn->query("SELECT* FROM $table WHERE id='$id'");

if($q->num_rows>0){
while ($row=$q->fetch_assoc()){?>





<div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Question</h4>
                    </div>
                    <div class="card-body">
                        <form action="updateQuestion.php" method="post"> 
                        
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        
                        <input type="hidden" name="table" value="<?php echo $table;?>">
                        
                            <div class="form-group">
                                <label for="question">Question:</label>
                                <textarea class="form-control" name="question" rows="3">
                                
                                <?php echo $row['question']; ?>
                                
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="optionA">Option A:</label>
                                <input type="text" class="form-control" name="optionA"
                                
                                value="<?php echo $row['option_a']; ?>"
                                >
                            </div>
                            <div class="form-group">
                                <label for="optionB">Option B:</label>
                                <input type="text" class="form-control" name="optionB"
                                
                                value="<?php echo $row['option_b']; ?>"
                                >
                            </div>
                            <div class="form-group">
                                <label for="optionC">Option C:</label>
                                <input type="text" class="form-control" name="optionC"  
                                
                                value="<?php echo $row['option_c']; ?>"
                                >
                            </div>
                            <div class="form-group">
                                <label for="optionD">Option D:</label>
                                <input type="text" class="form-control" name="optionD" value="<?php echo $row['option_d']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="correctAnswer">Correct Answer:</label>
                                <input class="form-control" name="correctAnswer" type="text" value="<?php echo $row['correct_answer'];?>">
                                    
                            </div>
                            <button type="submit" class="btn btn-primary" name="update">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <?php 
    
    }
    }
    
    
    
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>