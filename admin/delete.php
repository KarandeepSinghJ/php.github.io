<?php

include 'database.php';

$id = $_GET['ids'];

$deletequery = "delete from registration where id=$id";

$query = mysqli_query($conn, $deletequery);

if($query){
		?>
		<script>
			alert("deleted successfully");
		</script>

		<?php
		header('location:select.php');
	} else{
		?>
		<script>
			alert("data not deleted");
		</script>

		<?php
	}
	

?>

?>