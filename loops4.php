<style>
	pre{
		background-color: black;
		color: white;
	}
</style>
<div class="container">
    <div class="col-md-10">
    	<h2>Loops</h2>
    	<p>
    		
    	Loops or Iteration Statements in Programming are helpful when we need a specific task in repetition. They're essential as they reduce hours of work to seconds. In this article, we will explore the basics of loops, with the different types and best practices.
    	</p>
    	<hr>
    	<p>
    		<h2>Types of Loops</h2>
    		<ol>
    			<li>
    				For Loops
    				
    			</li>
    			<li>
    				While loops
    			</li>
    			<li>
    				Do While Loops
    			</li>
    			<li>
    				For Each Loops
    			</li>
    			<li>Nested Loops</li>
    			<li>
    				Repeat Until Loop
    			</li>
    			<li>For-In Loop</li>
    			<li>
    				For-Else Loop
    			</li>
    			<li>
    				While-Else Loop
    			</li>

    		</ol>
    	</p>
    	<p>
    		<h2>For Loop</h2>
    		<p>
    			For Loop: A for loop is used to iterate over a sequence (such as an array, list, or string) and execute a block of code for each item in the sequence.
    		</p>
    		Example (JavaScript):


    		<pre>
    			<!-- <em>C++</em> -->
    		<code>


   for loop
    int i;
    for (i = 0; i < 5; i++) {
        console.log(i);
    }
 
    		</code>
    	</pre>

    	</p>
    	<hr>
    	<p>
    		<h2>While Loop</h2>
    		<p>
    			While Loop: A while loop is used to execute a block of code as long as a certain condition is true.
    		</p>
    		Example (JavaScript):
    		<pre><code>
    			i = 0;
    while (i < 5) {
        cout << i << " ";
        i++;
    }
    		</code></pre>
    	</p>
    	<hr>
    	<p>
    		<h2>Do While Loop</h2>
    		<p>
    			Do-While Loop: A do-while loop is similar to a while loop, but the block of code is executed at least once before the condition is checked.
    		</p>
    		Example (JavaScript):
    		<pre>
    			
    			<code>
    			var i = 0;
do {
  console.log(i);
  i++;
} while (i < 5);
    			</code>
    		</pre>
    	</p>
    	<hr>
    	<p>
    		<p>
    			For-Each Loop: A for-each loop is used to iterate over a sequence (such as an array, list, or string) and execute a block of code for each item in the sequence. This type of loop is less common than the others.
    		</p>
    		<h2>For Each Loop</h2>
    		<pre>
    			<code>
    			var fruits = ['apple', 'banana', 'cherry'];
for (var fruit of fruits) {
  console.log(fruit);
}

    		</code>
    	</pre>
    	</p>
    	<hr>
    	<p>
    		<h2>For-Of Loop</h2>
    		<p>
    			# What is a For-Of Loop?
A for-of loop is a type of loop that allows you to iterate over iterable objects, such as arrays, strings, maps, sets, and more. It provides a concise and readable way to loop through the values of an iterable.
    		</p>
    		<pre>
    			<code>
    			const fruits = ['apple', 'banana', 'cherry'];

for (const fruit of fruits) {
  console.log(fruit);
}
    		</code>
    	</pre>
    	</p>
    	<hr>
<p>
	<h2>Nexted Loop</h2>
	<p>Nested Loop: A nested loop is a loop that is inside another loop. Nested loops are used to iterate over multiple sequences or to perform complex operations.</p>

	<pre>
		<code>
		for (var i = 0; i < 5; i++) {
  for (var j = 0; j < 3; j++) {
    console.log(i + ', ' + j);
  }
}
	</code>
</pre>

</p>
<hr>
<p>
	<h2>repeat-until loops</h2>
	<p>
		What is a Repeat Until Loop?
A repeat until loop is a type of loop that continues to execute a block of code until a specified condition is met.
	</p>
	<pre>
		<code>
		var i = 0;
repeat {
  console.log(i);
  i++;
} until (i >= 5);
	</code>
</pre>
</p> <hr>
<p>
	<h2>FOR-IN LOOP</h2>
	<p>
		What is a For-In Loop?
A for-in loop is a type of loop that allows you to iterate over the properties of an object. It provides a way to loop through the keys of an object and access their corresponding values.
	</p>
	<pre>
		<code>
		const person = {
  name: 'John Doe',
  age: 30,
  occupation: 'Software Developer'
};

for (const key in person) {
  console.log(`${key}: ${person[key]}`);
}
	</code>
</pre>
</p>
<hr>
<p>
	<h2>FOR-ELSE LOOP</h2>
	<P>
		For-Else Loop
A for-else loop is used to execute a block of code when the loop finishes normally.

	</P><pre>
		<code>
		fruits = ['apple', 'banana', 'cherry']
for fruit in fruits:
    print(fruit)
else:
    print("No more fruits!")
	</code>
</pre>

</p>
<hr>
<p>
	<h2>While-Else Loop</h2>
	<p>
		While-Else Loop
A while-else loop is used to execute a block of code when the loop finishes normally. 
although this particular convention is usually associated with python programming language.

	</p>
	<pre><code>
		i = 0
while i < 5:
    print(i)
    i += 1
else:
    print("Loop finished!")
	</code></pre>
</p>


<p class="hi">

<?php

require "loopsq4.php";

?>

</p>

	
	<a href="profile.php?url=loops5" id="next">Next</a>

<p>
	
</p>

</p>
<p>
		
	<a href="profile.php?url=practice">Practice What You Have Earnt So Far</a>
</p>
    </div>

</div>
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

#next{
color:red;
}
</style>

<script>
 
 window.onload=function (){  
  document.querySelector(".hi").scrollIntoView({
  behavior: 'smooth',
  block: 'center'
});
  }
  
  
  
  
  
  
  
  
</script>