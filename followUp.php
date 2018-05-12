<!doctype html>
<?php
	include('session.php');
	// include("dbconn.php");
	if($_SESSION['volunteer'] == 0){
		$sql = "select * from bankdata where bankId>=".($_SESSION['volunteer']+1)." and bankId <=".($_SESSION['volunteer']+100)." order by status asc, bankId asc";
	}
	else if($_SESSION['volunteer'] == 100){
		$sql = "select * from bankdata where bankId>=".($_SESSION['volunteer']+1)." and bankId <=".($_SESSION['volunteer']+100)." order by status asc, bankId asc";
	}
	else if($_SESSION['volunteer'] == 200){
		$sql = "select * from bankdata where bankId>=".($_SESSION['volunteer']+1)." and bankId <=".($_SESSION['volunteer']+100)." order by status asc, bankId asc";
	}
	else if($_SESSION['volunteer'] == 300){
		$sql = "select * from bankdata where bankId>=".($_SESSION['volunteer']+1)." and bankId <=".($_SESSION['volunteer']+100)." order by status asc, bankId asc";
	}
	else if($_SESSION['volunteer'] == 400){
		$sql = "select * from bankdata where bankId>=".($_SESSION['volunteer']+1)." and bankId <=".($_SESSION['volunteer']+100)." order by status asc, bankId asc";
	}
	else if($_SESSION['volunteer'] == 500){
		$sql = "select * from bankdata where bankId>=".($_SESSION['volunteer']+1)." and bankId <=".($_SESSION['volunteer']+100)." order by status asc, bankId asc";
	}
	else if($_SESSION['volunteer'] == 600){
		$sql = "select * from bankdata where bankId>=".($_SESSION['volunteer']+1)." and bankId <=".($_SESSION['volunteer']+100)." order by status asc, bankId asc";
	}
	else if($_SESSION['volunteer'] == 700){
		$sql = "select * from bankdata where bankId>=".($_SESSION['volunteer']+1)." and bankId <=".($_SESSION['volunteer']+100)." order by status asc, bankId asc";
	}
	else if($_SESSION['volunteer'] == 800){
		$sql = "select * from bankdata where bankId>=".($_SESSION['volunteer']+1)." and bankId <=".($_SESSION['volunteer']+100)." order by status asc, bankId asc";
	}
	else if($_SESSION['volunteer'] == 900){
		$sql = "select * from bankdata where bankId>=".($_SESSION['volunteer']+1)." and bankId <=".($_SESSION['volunteer']+100)." order by status asc, bankId asc";
	}
	else if($_SESSION['volunteer'] == 1000){
		$sql = "select * from bankdata where bankId>=".($_SESSION['volunteer']+1)." and bankId <=".($_SESSION['volunteer']+131)." order by status asc, bankId asc";
	}

	// if($_SESSION['volunteer'] == 1000){
	// 	$sql = "select * from bankdata limit ".$_SESSION['volunteer'].",131";
	// }
	// else
	// 	$sql = "select * from bankdata limit ".$_SESSION['volunteer'].",100";
	$result = $conn->query($sql);
//order by status asc, bankId asc

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
		                <th class="font-weight-normal" scope="col">Comment</th>
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
						        	<td class="font-weight-normal"><input type="text" name="bankId" id="bankId" readonly class="form-control-plaintext" style="word-wrap: break-word;min-width: 20px; max-width: 50px;" value="<?php echo $row["bankId"] ?>"></td>
						        	<td class="font-weight-normal text-capitalize" style="word-wrap: break-word;min-width: 50px; max-width: 80px;"><?php echo $row["bankName"] ?></td>
						        	<td class="font-weight-normal text-capitalize" style="word-wrap: break-word;min-width: 50px; max-width: 80px;"><?php echo $row["poc"] ?></td>
						        	<td class="font-weight-normal text-lowercase" style="word-wrap: break-word;min-width: 50px; max-width: 80px;"><?php echo $row["pocEmail"] ?></td>
						        	<td class="font-weight-normal" style="word-wrap: break-word;min-width: 120px; max-width: 120px;"><a href="tel:<?php echo $row["pocMobile"] ?>"><?php echo $row["pocMobile"] ?></a></td>
						        	<td class="font-weight-normal" style="word-wrap: break-word;min-width: 200px; max-width: 240px;">
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
						        		<select name="status" class="form-control form-control-sm">
						        			<option value="1">Pending</option>
											<option value="4">Confirmed</option>
											<option value="2">Not received</option>
											<option value="3">No co-operation</option>
									    </select>
									</td>
						        	<td class="font-weight-normal">
						        		<!-- <form class="form-inline"> -->
							        		<p style="margin-bottom: 8px;">Event 1</p>
							        		<input type="date" class="form-control form-control-sm" style="word-wrap: break-word;min-width: 180px; max-width: 200px;" name="eventDate1" value="<?php echo $row['eventDate1'] ?>">
							        		<p style="margin-bottom: 8px;margin-top: 8px">Event 2</p>
							        		<input type="date" class="form-control form-control-sm" style="word-wrap: break-word;min-width: 180px; max-width: 200px;" name="eventDate2" value="<?php echo $row['eventDate2'] ?>">
							        	<!-- </form> -->
						        	</td>
						        	<td class="font-weight-normal">
						        		<!-- <form> -->
							        		<p style="margin-bottom: 8px;">Address 1</p>
							        		<input type="text" class="form-control form-control-sm" style="word-wrap: break-word;min-width: 180px; max-width: 200px;" name="address1" value="<?php echo $row['address1'] ?>">
							        		<p style="margin-bottom: 8px;margin-top: 8px">Address 2</p>
							        		<input type="text" class="form-control form-control-sm" style="word-wrap: break-word;min-width: 180px; max-width: 200px;" name="address2" value="<?php echo $row['address2'] ?>">
							        	<!-- </form> -->
						        	</td>
						        	<td class="font-weight-normal">
						        		<p style="margin-bottom: 8px;">Comment</p>
						        		<input type="text" class="form-control form-control-sm" style="word-wrap: break-word;min-width: 180px; max-width: 200px;height: 50px;" name="comment" value="<?php echo $row['comment'] ?>"><br>
						        		<button type='submit' name='submitFollowUp' class='btn btn-primary form-control-sm'>Submit</button>
						        	</td>
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
