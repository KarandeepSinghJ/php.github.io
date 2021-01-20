<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "cruddb";

$conn = mysqli_connect($server, $user, $password, $db);


if($conn){
	?>
	<script>
		alert("connection successful");
	</script>

	<?php
} else{
	?>
	<script>
		alert("no connection");
	</script>

	<?php
}

?>