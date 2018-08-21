<?php
//register.php
require_once('conn.php');
if (isset($_POST['submit'])) {
	if (empty($_POST['name'])) {
		$errline = "Full name is a required field.";
	} elseif (empty($_POST['phone'])) {
		$errline = "Phone number is a required field.";
	} elseif (empty($_POST['address'])) {
		$errline = "Full address is a required field.";
	} elseif (empty($_POST['email'])) {
		$errline = "Email address is a required field.";
	} else {
    		$name = $_POST['name'];
    		$phone = $_POST['phone'];
    		$address = $_POST['address'];
    		$email = $_POST['email'];
    		$sql = "INSERT into `details` (name, phone, address, email) values ('$name', '$phone', '$address', '$email')";
    		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
    			//header("location:index.php");
			?>
			<meta http-equiv="refresh" content="1;url=index.php">
			<?php
			exit;
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<form method="post" action="register.php" role="form">
	<div class="row justify-content-center text-center">
		<div class="col-sm-4 col-md-8 form-group">
			<h1>Register</h1>
		</div>
	</div>
	<?php
	if (!empty($errline)) {
		?>
		<div class="row justify-content-center text-center">
			<div class="col-sm-4 col-md-8 form-group" style="color:red;font-weight:bold;">
				<?=$errline;?>
			</div>
		</div>
	<?php
	}
	?>
	<div class="row justify-content-center">
		<div class="col-sm-4 col-md-8 form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" placeholder="Please enter your full name here" name="name" value="<?=$_POST['name'];?>" />
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-4 col-md-8 form-group">
			<label for="phone">Phone</label>
				<input type="tel" class="form-control" placeholder="Please enter your phone number here" name="phone" value="<?=$_POST['phone'];?>" />
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-4 col-md-8 form-group">
			<label for="address">Address</label>
			<input type="text" class="form-control" placeholder="Please enter your complete address here" name="address" value="<?=$_POST['address'];?>" />

		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-4 col-md-8 form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" placeholder="Please enter your best email address here" name="email" value="<?=$_POST['email'];?>" />
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-4 col-md-8 form-group">
			<input type="submit" class="btn btn-primary" name="submit" value="Insert" />
		</div>
	</div>
	</form>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
