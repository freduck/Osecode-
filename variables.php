  <style>
	pre{
		background-color: black;color: white;
	}
</style>
<div class="col-md-10" style="padding: 30px;">
	<h3 class="text-center">Variables</h3>
	<p>
		In a program, the data is stored in 2 ways – Either the data is already stored in the program, or the data comes from the user. The data is stored in both ways. The program stores this data in the form of Variables. Every variable has its own data type, a name, and a value assigned to it. The value of that variable might change as time goes by, and hence the name Variable. Let’s look at the concept of Variables in more detail.
	</p>
	<p>
		Definition
Variables are names given to computer memory locations in order to store data in a program. This data can be known or unknown based on the assignment of value to the variables.
	</p>
	<hr>
	<p>
		<h2>
			
		Creating Variables
		</h2>
The process of creating a variable is also known as Declaration of Variable. Every programming language has its own way of declaring a variable. Declaration of a variable does 2 things :

It tells the compiler what the variable name is.
It specifies what type of data the variable will hold.
In general, the declaration consists of 3 parts – the variable type, variable label/name, and semi-colon to end the declaration.

Syntax – data_type variable_name = value ;
<hr>
<p>
	
for the sake of this project we are going to be using javascript all through because we can practice whate we are learning online here without needing to install any compiler what so ever
</p>
<hr>
<h3>
	
For example of variable and how the are decleard in javascript
</h3>
<pre>
	<code>
		
const speed;

float sum = 0;
 var age= 20;
 let name="John Smith";
	</code>
</pre>

<hr>
</p>
<p>
	<h3>Rules For Naming Variable</h3>
There are a few conventions which are needed to be followed while declaring Variables –
<ol>
	<li>
		
Variable names must begin with a letter
	</li>
	<li>
		
 underscore
	</li>
	<li>
		
  non-number character
	</li>
	<li>
		
   Each language has its own conventions
	</li>
</ol>
Few programming languages like PHP, Python, Perl, etc. do not require to specify data type at the start. <br>
Do not use a comma with numbers.
Once a data type is defined for the variable, then only that type of data can be stored in it. For example, if the variable is declared as Int, then it can only store integer values.
A variable name once defined can only be used once in the program. You cannot define it again to store other types of value. Except in languages mentioned above and Javascript when using (let and var) we can therefore mutate this variables.
Built-in Data types are frequently used to declare the data type of the Variable.
</p>
	<hr>
	<p>
		
	<h2>
		
	Assigning Values to Variables
	</h2>
	<ol>
		<li>
			
We use the  =  sign to assign values to the declared variables. 
		</li> <li>
			
The variable name and type will come on the left side
		</li>
		<li>
			
 while the value to be stored will be on the right side.
		</li>
	</ol> 
	</p>
</p>
	</p>
	<p>
	
	

    
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
<a href="variableE.php" class="start-test">Take Exercise</a>
<main class="hi">
<div class="question-container hidden">


<?php
require "variableE.php";
//session_start();
//$_SESSION["exist"])){

//"<p class='bg-danger text-white text-enter'>"

//.$_SESSION['exist']."</p>";

//}

?>


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
  document.querySelector(".start-test").addEventListener("click", function (){
  
  
  if(document.querySelector(".question-container").classList.contains("hidden")){
  
  document.querySelector(".question-container").classList.toggle("hidden");
  }
  
  
  
  
  });
</script>
	
	</p>
	<p>
		
	<a href="profile.php?url=practice">Practice What You Have Earnt So Far</a>
	</p>
</div>