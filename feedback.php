 
<ul class="col-md-6">
	
<?php 

//"system/class.php";
session_start();
$email=$_SESSION['email'];

$conn= mysqli_connect("localhost","detsconl_projectdb","detsconl_projectdb","detsconl_projectdb");


$fs=mysqli_query($conn,"SELECT *FROM feed_back WHERE email='$email'");
foreach ($fs as $feedback) {
	# code...
	?>

<li>
	<div class="response">
		<ol>
			<li>
		<b>
			
	<?php echo $feedback['request'];?>
		</b>					
			</li>
			<li>
				
	<?php echo $feedback['response'];?>
			</li>
		</ol>
	</div>
</li>


	<?php
}

?>
</ul>
<style>
	.response{
		padding: 30px;
		width: 300px;
		border:1px solid whitesmoke;
		margin: 0 auto;
		border-top-left-radius: 50px;
		border-bottom-right-radius: 50px;
	}
</style>