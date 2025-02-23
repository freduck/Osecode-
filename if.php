<style>

main {
  max-width: 800px;
  margin: 2em auto;
  padding: 2em;
  background-color: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.question-container {
  margin-bottom: 2em;
}

.options {
  margin-top: 1em;
}

button {
  padding: 1em 2em;
  margin: 0.5em;
  border: none;
  border-radius: 0.5em;
  background-color: #4CAF50;
  color: #fff;
  cursor: pointer;
}

button:hover {
  background-color: #3e8e41;
}

#submit-btn {
  background-color: #333;
  color: #fff;
}
.hidden {
display:none;

}
#result {
  margin-top: 2em;
  font-size: 1.5em;
  font-weight: bold;
}
</style>

<main class="hi">
<div class="question-container ">


<?php
require "ifq.php";




?>




<a href="profile.php?url=if2">Next</a>

</div>
</main>
<script>
let currentQuestion = 0;
let score = 0;

document.getElementById("submit-btn").addEventListener("click", checkAnswer);

function checkAnswer() {
  let correctAnswer = document.getElementById("question").getAttribute("data-correct-answer");
  let userAnswer = document.querySelector("button.selected").textContent;
  
  if (userAnswer === correctAnswer) {
    score++;
  }
  
  currentQuestion++;
  
  if (currentQuestion >= questions.length) {
    document.getElementById("result").textContent = `Quiz finished! Your score is ${score} out of ${questions.length}.`;
    document.getElementById("submit-btn").disabled = true;
  } else {
    displayQuestion();
  }
}

function displayQuestion() {
  let question = questions[currentQuestion];
  document.getElementById("question").textContent
  }
  window.onload=function (){
  
  
 
  
  document.querySelector(".question-container").scrollIntoView({
  behavior: 'smooth',
  block: 'center'
});
  
  
  }
</script>
	
	</p>
	<p>
		
	<a href="profile.php?url=practice">Practice What You Have Earnt So Far</a>
	</p>
</div>