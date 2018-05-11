<!doctype html>
<html class="no-js" lang="">
	<head>
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
		
		<script>
			function copyText() {
				var copyText = document.getElementById("description");
				copyText.select();
				document.execCommand("Copy");

				var tooltip = document.getElementById("copyTooltip");
				tooltip.innerHTML = "Copied";
			}

			function outFunc() {
				var tooltip = document.getElementById("copyTooltip");
				tooltip.innerHTML = "Copy to clipboard";
			}
		</script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="list.php">List</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="index.php">Form</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container" style="margin-top: 50px;">
			<form class="form-inline">
				<div class="form-group mx-sm-3 mb-2">
					<input type="text" name="description" hidden="hidden" id="description" class="form-control mb-3" value="Click on the button to copy the text" readonly>
				</div>
				<div class="form-group mx-sm-3 mb-2">
					<button onclick="copyText()" onmouseout="outFunc()" class="btn btn-primary">
						<span class="tooltiptext" id="copyTooltip">Copy description</span>
					</button>
				</div>
			</form>
		</div>
		<div class="container-fluid">
			<?php include("followUp.php") ?>
			<?php include("addevents.php") ?>

			<!-- <iframe id="DelayReason" style="border-style: none; border-color: inherit; border-width: 0px; height:500px; width:100%;" src="addevents.php"></iframe>
			<iframe id="DelayReason" style="border-style: none; border-color: inherit; border-width: 0px; height:500px; width:50%;" src="addevents.php"></iframe> -->
		</div>

	</body>
</html>
