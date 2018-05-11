<?php
	include("dbconn.php");
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST['submitEvent']))
		{

			$sql = "INSERT INTO events VALUES ('".$_POST['bankId']."','".$_POST["bankName"]."','".$_POST["state"]."','".$_POST["pageUrl"]."')";

			if ($conn->query($sql) === TRUE) {
				echo '<button type="button" class="btn btn-success mb-3" disabled>Bank ID '.$_POST['bankId'].' added successfully</button>';
			} else {
				echo '<button type="button" class="btn btn-danger mb-3" disabled>' . $conn->error.'</button>';
			}
		}
		
		else if(isset($_POST["submitFollowUp"])){
			$sql = 'UPDATE bankdata SET status = '.$_POST["status"].',eventDate1 = "'.$_POST["eventDate1"].'",eventDate2 = "'.$_POST["eventDate2"].',address1 = "'.$_POST["address1"].',address2 = "'.$_POST["address2"].',comment = "'.$_POST["comment"].'" WHERE bankdata.bankId ='. $_POST["bankId"] .';';
			$conn->query($sql);
			header("Location: folowUp.php");
		}
	}
?>