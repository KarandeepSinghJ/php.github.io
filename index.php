<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP CURD OPERATIONS</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container jumbotron text-center mt-5">
  		<h1>Welcome to our portal</h1>
  		<p>Fill all the details carefully</p>
  		<p>This form can change your life.</p> 
	</div>

	<p class="text-center mt-5 text-danger">Apply For Company Placement. Find your dream job.</p>

	<div class="container text-center mt-5">
		<form action="" method="POST" class="row g-3">
			<div class="col-md-6">
    			<input type="text" class="form-control" name="name" placeholder="Enter your name" required>
  			</div>
  			<div class="col-md-6">
    			<input type="tel" class="form-control" name="mobile" placeholder="Enter mobile no." required>
  			</div>
  			<div class="col-md-6 mt-4">
    			<input type="text" class="form-control" name="address" placeholder="Enter your address" required>
  			</div>
  			<div class="col-md-6 mt-4">
    			<input type="text" class="form-control" name="degree" placeholder="Enter your qualification" required>
  			</div>
  			<div class="col-md-6 mt-4">
    			<input type="email" class="form-control" name="email" placeholder="Enter your email" required>
  			</div>
  			<div class="col-md-6 mt-4">
    			<input type="text" class="form-control" name="language" placeholder="Preferred Language" required>
  			</div>
  			<button type="submit" class="btn btn-primary mt-5 mb-3 ml-3" name="submit">Register</button>
  			<a href="select.php">check</a>
		</form>
	</div>	
</body>

</html>

<?php 

include 'database.php';

if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
	$degree = mysqli_real_escape_string($conn, $_POST['degree']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$language = mysqli_real_escape_string($conn, $_POST['language']);

	$insertquery = "insert into registration(name, email, mobile, degree, address, language) values('$name', '$email', '$mobile', '$degree', '$address', '$language')";

	$query = mysqli_query($conn, $insertquery);

	if($query){
		?>
		<script>
			alert("inserted successfully");
		</script>

		<?php
	} else{
		?>
		<script>
			alert("data not sent");
		</script>

		<?php
	}
}	

?>