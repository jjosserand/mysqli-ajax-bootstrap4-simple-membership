<?php
require_once('conn.php');
if (isset($_POST['submit'])) {
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Bootstrap modal</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form method="post" action="register.php" role="form">
	<div class="modal-body">
		<div class="form-group">
			<label for="id">ID</label>
			<input type="text" class="form-control" id="id" name="id" value="<?php echo $mem['sn'];?>" readonly="true"/>

		</div>
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name" name="name" value="<?php echo $mem['name'];?>" />
		</div>
		<div class="form-group">
			<label for="phone">Phone</label>
				<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $mem['phone'];?>" />
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" class="form-control" id="address" name="address" value="<?php echo $mem['address'];?>" />

		</div>
		<div class="form-group">
      <label for="email">Email</label>
			<input type="text" class="form-control" id="email" name="email" value="<?php echo $mem['email'];?>" />
		</div>
		</div>
		<div class="modal-footer">
			<input type="submit" class="btn btn-primary" name="submit" value="Insert" />&nbsp;
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</form>
</body>
</html>
