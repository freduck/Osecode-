
<?php
session_start();

//$_SESSION['email'];
?>

<div class="col-md-10">

<form action="add.php" method="post">
	<div class="form-group">
		<input type="hidden" name="email" id="email" value="<?php echo $_SESSION['email'];?>">
	</div>
	<div class="form-group">
		<textarea name="review" id="review" cols="30" rows="5"></textarea>
	</div>
	<div class="form-group">
		<button class="btn btn-dark" type="submit" name="send">Send</button>
	</div>
	</form>
	<script src="jquery.min.js"></script>
</div>