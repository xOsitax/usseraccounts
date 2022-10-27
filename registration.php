<!DOCTYPE html>
<html>
<head>
	
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div>
	<?php 
	if (isset($_POST['create'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$phonenumber = $_POST['phonenumber'];
		$password = $_POST['password'];
		
		echo $firstname . " " . $lastname . " " . $email . " " . $phonenumber . " " . $password;
	}

	?>
</div>

<div>
	<form action="registration.php" method ="post">
		<div class="container">

			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
			
					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" type="text" name="firstname" required>

					<label type="lastname"><b>Last Name</b></label>
					<input class="form-control" type="text" name="lastname" required>

					<label type="email"><b>Email Address</b></label>
					<input class="form-control" type="email" name="email" required>

					<label type="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" type="text" name="phonenumber" required>

					<label type="password"><b>Password</b></label>
					<input class="form-control" type="password" name="password" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" name="create" value="Sign up">
				</div>
			</div>
		</div>
	</form>
</div>
</body>
</html>
