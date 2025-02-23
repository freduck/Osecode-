<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Variables</title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .exercise {
      margin-bottom: 20px;
    }
    .hidden {
    display:none;
    }
  </style>
</head>
<body>
<div class="container">
  <h1>Learning Variables</h1>
  <p>A variable is a container that holds a value. You can think of it as a labeled box where you can store a value.</p>
  <p>In programming, variables are used to store and manipulate data. You can assign a value to a variable using the assignment operator (=).</p>
  <p>For example:</p>
  <pre>
    x = 5;
    y = "Hello";
  </pre>
  <p>In this example, we assign the value 5 to the variable x and the string "Hello" to the variable y.</p>

  <h2>Exercises</h2>
  <div class="exercise">
    <h3>Exercise 1</h3>
    <p>Declare a variable x and assign it the value 10.</p>
    <textarea id="exercise1"></textarea><br/>
    <button onclick="checkExercise1()" class="btn btn-primary">Submit</button>
    <p id="result1"></p>
  </div>
  <div class="exercise_2  hidden">
    <h3>Exercise 2</h3>
    <p>Declare two variables, y and z, and assign them the values 20 and 30 respectively.</p>
    <textarea id="exercise2"></textarea><br/>
    <button onclick="checkExercise2()" class="btn btn-primary">Submit</button>
    <p id="result2"></p>
  </div>
  <div class="exercise_3 hidden">
    <h3>Exercise 3</h3>
    <p>Assign the value of y to x.</p>
    <textarea id="exercise3"></textarea><br/>
    <button onclick="checkExercise3()">Submit</button>
    <p id="result3"></p>
  </div>
  <div class="exercise_4 hidden">
    <h3>Exercise 4</h3>
    <p>Declare a variable name and assign it your name as a string.</p>
    <textarea id="exercise4"></textarea><br/>
    <button onclick="checkExercise4()">Submit</button>
    <p id="result4"></p>
  </div>
  <div class="exercise_5 hidden">
    <h3>Exercise 5</h3>
    <p>Assign the value of name to a new variable called greeting.</p>
    <textarea id="exercise5"></textarea><br/>
    <button onclick="checkExercise5()">Submit</button>
    <p id="result5"></p>
  </div>
</div>
  <script>
    function checkExercise1() {
      var answer = document.getElementById("exercise1").value;
      if (answer.trim() === "x = 10;") {
        document.getElementById("result1").innerHTML = "Correct!";
        setTimeout(function(){
        document.querySelector(".exercise").classList.add("hidden");
       document.querySelector(".exercise_2").classList.remove("hidden"); 
        },5000);
      } else {
        document.getElementById("result1").innerHTML = "Incorrect. The correct answer is x = 10;";
      }
    }

    function checkExercise2() {
      var answer = document.getElementById("exercise2").value;
      if (answer.trim() === "y = 20; z = 30;") {
        document.getElementById("result2").innerHTML = "Correct!";
      setTimeout(function(){
        document.querySelector(".exercise_2").classList.add("hidden");
       document.querySelector(".exercise_3").classList.remove("hidden"); 
        },5000);  
        
      } else {
        document.getElementById("result2").innerHTML = "Incorrect. The correct answer is y = 20; z = 30;";
      }
    }

    function checkExercise3() {
      var answer = document.getElementById("exercise3").value;
      if (answer.trim() === "x = y;") {
        document.getElementById("result3").innerHTML = "Correct!";
        
    setTimeout(function(){
        document.querySelector(".exercise_3").classList.add("hidden");
       document.querySelector(".exercise_4").classList.remove("hidden"); 
        },5000);      
      } else {
        document.getElementById("result3").innerHTML = "Incorrect. The correct answer is x = y;";
      }
    }

    function checkExercise4() {
      var answer = document.getElementById("exercise4").value;
      if (answer.trim().startsWith("name = ")) {
        document.getElementById("result4").innerHTML = "Correct!";
        
    setTimeout(function(){
        document.querySelector(".exercise_4").classList.add("hidden");
       document.querySelector(".exercise_5").classList.remove("hidden"); 
        },5000);          
      } else {
        document.getElementById("result4").innerHTML = "Incorrect. The correct answer starts with 'name = '";
      }
    }

    function checkExercise5() {
      var answer = document.getElementById("exercise5").value;
      if (answer.trim() === "greeting = name;") {
        document.getElementById("result5").innerHTML = "Correct! Good Job <a href='profile.php?url=ifstatements.php'>if statement</a>";
        

   
          
      } else {
        document.getElementById("result5").innerHTML = "Incorrect. The correct answer is greeting = name;";
      }
    }
  </script>
</body>
</html>
