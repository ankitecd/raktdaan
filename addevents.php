<!doctype html>
<?php include("dbconn.php"); ?>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>
		<form method="post" action="insertdata.php">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Blood Bank ID</label>
					<input type="text" name="bankId" class="form-control" id="bank_id" placeholder="">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">Blood Bank</label>
					<input type="text" name="bankName" class="form-control" id="bank_name" placeholder="">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputCity">State</label>
					<input type="text" name="state" class="form-control" id="state">
				</div>
				<div class="form-group col-md-6">
					<label for="inputCity">Page URL</label>
					<input type="text" name="pageUrl" class="form-control" id="page_url">
				</div>
			</div>
			<button type="submit" name="submitEvent" class="btn btn-primary mb-3">Submit</button>
		</form>
	</body>
</html>