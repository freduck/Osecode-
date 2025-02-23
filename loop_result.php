
<?php

// Configuration

require "Conn.php";

// Check connection
if ($nconn->connect_error) {
    die("Connection failed: " . $nconn->connect_error);
}

// Retrieve user's answers
$email = $_SESSION['email'];// Replace with the actual user email
$sql = "
    SELECT 
        q.question,
        q.option_a,
        q.option_b,
        q.option_c,
        q.option_d,
        q.correct_answer,
        a.email,
        a.correct_answer AS user_answer
    FROM 
        loop_questions q
    INNER JOIN 
        loop_answer a ON q.id = a.qid
    WHERE 
        a.email = '$email'
";

$result = $nconn->query($sql);

// Calculate user's score
$score = 0;
$total_questions = 0;
while($row = $result->fetch_assoc()) {
    $total_questions++;
    if($row['correct_answer'] == $row['user_answer']) {
        $score++;
    }
}

// Calculate user's performance percentage
$percentage = ($score / $total_questions) * 100;

// Display user's performance
echo "<h2>User Performance</h2>";
echo "<p>Email: $email</p>";
echo "<p>Score: $score/$total_questions</p>";
echo "<p>Percentage: $percentage%</p>";

// Close connection
$nconn->close();

?>
