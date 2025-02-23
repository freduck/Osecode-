


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Question</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Question</h4>
                    </div>
                    <div class="card-body">
                        <form action="submit-questions.php" method="post">
                            <div class="form-group">
                                <label for="question">Question:</label>
                                <textarea class="form-control" name="question" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="optionA">Option A:</label>
                                <input type="text" class="form-control" name="optionA" required>
                            </div>
                            <div class="form-group">
                                <label for="optionB">Option B:</label>
                                <input type="text" class="form-control" name="optionB" required>
                            </div>
                            <div class="form-group">
                                <label for="optionC">Option C:</label>
                                <input type="text" class="form-control" name="optionC" required>
                            </div>
                            <div class="form-group">
                                <label for="optionD">Option D:</label>
                                <input type="text" class="form-control" name="optionD" required>
                            </div>
                            <div class="form-group">
                                <label for="correctAnswer">Correct Answer:</label>
                                <input type="text" class="form-control" name="correctAnswer" required>
                                
                            </div>
                            <div class="form-groùp">
                                <select name="table" class="form-control" required>
                                    
                                    <option>Question Table</option>
                                       <option>
                                        questions
                                    </option>
                                    <option>
                                        if_questions
                                    </option>
                                       <option>
                                        loop_questions
                                    </option>
                                </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Question</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
```
