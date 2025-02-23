
<?php
// Configuration
$conn=new mysqli("localhost","detsconl_projectdb","detsconl_projectdb","detsconl_projectdb");





// Get form data
$question = $_POST['question'];
$optionA = $_POST['optionA'];
$optionB = $_POST['optionB'];
$optionC = $_POST['optionC'];
$optionD = $_POST['optionD'];
$table=$_POST['table'];
$correctAnswer = $_POST['correctAnswer'];

// Insert data into database
$sql = "INSERT INTO $table (question, option_a, option_b, option_c, option_d, correct_answer) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $question, $optionA, $optionB, $optionC, $optionD, $correctAnswer);
$stmt->execute();

// Check if data was inserted successfully
if ($stmt->affected_rows > 0) {
    echo "Question added successfully!";
} else {
    echo "Error adding question: " . $conn->error;
}

// Close database connection
$stmt->close();
$conn->close();
?>
