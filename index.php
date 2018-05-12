<?php
	include('login.php'); // Includes Login Script

	if(isset($_SESSION['login_user'])){
		if ($_SESSION['login_user'] == "admin@raktdaan") {
			header("location: admin.php");
		}
		else{
			header("location: followUp.php");
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Form in PHP with Session</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="./css/events.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>
		<div id="main">
			<div id="login">
				<center><h2 style="margin-top: 100px;margin-bottom: 40px;">Login</h2></center>
<!-- 				<div class="row justify-content-md-center">
 -->					<div class="col-md-4 offset-md-4">
						<form action="" method="post">
							<div class="form-group">
								<label for="inputUsername">Username</label>
								<input type="text" name="username" class="form-control" id="inputUsername" autofocus>
							</div>
							<div class="form-group">
								<label for="inputPassword">Password</label>
								<input type="password" name="password" class="form-control" id="inputPassword">
							</div>
							<div class="form-group">
								<select name="volunteer" class="form-control">
									<option value="0">Volunteer 1</option>
				        			<option value="100">Volunteer 2</option>
									<option value="200">Volunteer 3</option>
									<option value="300">Volunteer 4</option>
									<option value="400">Volunteer 5</option>
									<option value="500">Volunteer 6</option>
									<option value="600">Volunteer 7</option>
									<option value="700">Volunteer 8</option>
									<option value="800">Volunteer 9</option>
									<option value="900">Volunteer 10</option>
									<option value="1000">Volunteer 11</option>
									<option value="0">None</option>
							    </select>
							</div>
							<span><?php echo $error; ?></span><br><br>
							<button type="submit" name="submit" class="btn btn-primary mb-2">Confirm identity</button>
							
						</form>
					</div>
				<!-- </div> -->
			</div>
		</div>
	</body>
</html>