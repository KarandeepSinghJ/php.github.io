<?php

include 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LIST OF CANDIDATES</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="main-div">
		<h1>LIST OF CANDIDATES</h1>
		<div class="center-div">
			<div class="table-data">
				<table>
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Degree</th>
						<th>Address</th>
						<th>Language</th>
						<th colspan="2">Operation</th>
					</thead>
					<tbody>

			<?php
			
			$selectquery = "select * from registration";

			$query = mysqli_query($conn, $selectquery);

			while($result = mysqli_fetch_assoc($query)){



		?>

						<tr>
							<td><?php echo $result['id']; ?></td>
							<td><?php echo $result['name']; ?></td>
							<td><?php echo $result['email']; ?></td>
							<td><?php echo $result['mobile']; ?></td>
							<td><?php echo $result['degree']; ?></td>
							<td><?php echo $result['address']; ?></td>
							<td><?php echo $result['language']; ?></td>
							<td><a href="update.php?id=<?php echo $result['id']; ?>"><i class="fa fa-edit text-warning"></i></a></td>
							<td><a href="delete.php?ids=<?php echo $result['id']; ?>"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
						</tr>
		<?php				

			}

		?>			
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

</html>

