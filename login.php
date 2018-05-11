<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	$sql = '';
	if (isset($_POST['submit'])) {
		if ($_POST['username'] == "" || $_POST['password'] == "") {
			$error = "Username or Password is invalid";
		}
		else
		{
			// Define $username and $password
			$uname=$_POST['username'];
			$pword=$_POST['password'];
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			include("dbconn.php");
			// To protect MySQL injection for Security purpose
			$uname = stripslashes($uname);
			$pword = stripslashes($pword);
			$uname = mysql_real_escape_string($uname);
			$pword = mysql_real_escape_string($pword);
			// SQL query to fetch information of registerd users and finds user match.
			$sql = "select * from login where password='".$pword."' AND username='".$uname."'";
			$query = $conn->query($sql);
			$rows = mysqli_num_rows($query);
			if ($rows == 1) {
				if($uname == "admin@raktdaan"){
					$_SESSION['login_user']=$uname; // Initializing Session
					header("location: admin.php"); // Redirecting To Other Page
				}
				else{
					$_SESSION['volunteer']=$_POST['volunteer'];
					$_SESSION['login_user']=$uname; // Initializing Session
					header("location: followUp.php"); // Redirecting To Other Page
				}
			} else {
				$error = "Username or Password is invalid";
			}
		}
	}
?>