<!doctype html>
<?php
	include('session.php');
	include("dbconn.php");
	$sql = "select * from bankdata order by status asc, bankId asc";
	$result = $conn->query($sql);

?>
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
		<div id="profile">
			<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
			<b id="logout"><a href="logout.php">Log Out</a></b>
		</div>
		<div class="container-fluid table-responsive">
			<table id="myTable" class="table table-bordered table-striped table-hover" style="font-weight: none; font-size: 16px;">
				<thead class="thead-dark">
		            <tr style="text-align: center;">
		                <th class="font-weight-normal" scope="col">Bank ID</th>
		                <th class="font-weight-normal" scope="col">Bank Name</th>
		                <th class="font-weight-normal" scope="col">POC Name</th>
		                <th class="font-weight-normal" scope="col">Email Id</th>
		                <th class="font-weight-normal" scope="col">Mobile</th>
		                <th class="font-weight-normal" scope="col">Status</th>
		                <th class="font-weight-normal" scope="col">Event Date</th>
		                <th class="font-weight-normal" scope="col">Address</th>
		            </tr>
		        </thead>
		        <tbody>
				<?php
					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
					        ?>
					        <form method="post" action="insertdata.php">
						        <tr scope='row'>
						        	<th class="font-weight-normal"><input type="text" name="bankId" id="bankId" readonly class="form-control-plaintext" style="word-wrap: break-word;min-width: 20px; max-width: 50px;" value="<?php echo $row["bankId"] ?>"></th>
						        	<th class="font-weight-normal text-capitalize" style="word-wrap: break-word;min-width: 50px; max-width: 100px;"><?php echo $row["bankName"] ?></th>
						        	<th class="font-weight-normal text-capitalize" style="word-wrap: break-word;min-width: 100px; max-width: 200px;"><?php echo $row["poc"] ?></th>
						        	<th class="font-weight-normal text-lowercase" style="word-wrap: break-word;min-width: 100px; max-width: 150px;"><?php echo $row["pocEmail"] ?></th>
						        	<th class="font-weight-normal" style="word-wrap: break-word;min-width: 120px; max-width: 120px;"><a href="tel:<?php echo $row["pocMobile"] ?>"><?php echo $row["pocMobile"] ?></a></th>
						        	<th class="font-weight-normal" style="word-wrap: break-word;min-width: 200px; max-width: 240px;">
						        		<p>Current status : <?php
						        		 if($row["status"] == 1){
						        		 	echo "Pending";
						        		 }
						        		 elseif ($row["status"] == 2) {
						        		 	echo "Not received";
						        		 }
						        		 elseif ($row["status"] == 3) {
						        		 	echo "No co-operation";
						        		 }
						        		 elseif ($row["status"] == 4) {
						        		 	echo "Confirmed";
						        		 }
						        		 ?></p>
									</th>
						        	<th class="font-weight-normal">
						        		<form class="form-inline">
							        		<p style="margin-bottom: 8px;">Event 1 : <?php echo $row['eventDate1'] ?></p>
							        		<p style="margin-bottom: 8px;margin-top: 8px">Event 2 : <?php echo $row['eventDate2'] ?></p>
							        	</form>
						        	</th>
						        	<th class="font-weight-normal">
						        		<form>
							        		<p style="margin-bottom: 8px;">Address 1 : <?php echo $row['address1'] ?></p><br>
							        		<p style="margin-bottom: 8px;margin-top: 8px">Address 2 : <?php echo $row['address2'] ?></p>
							        	</form>
						        	</th>
						        </tr>
						    </form>
				<?php
					    }
					} else {
					    echo "0 results";
					}

				?> 
				</tbody>
			</table>
		</div>

	</body>
</html>
