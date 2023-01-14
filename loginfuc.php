<?php
	include("conn.php");
	session_start();
	
	if (isset($_POST['submit'])){
		$email = $conn->real_escape_string($_POST['email']);
		$password = $conn->real_escape_string($_POST['password']);
		$sql= "SELECT * FROM accounts WHERE email='$email'  AND password='$password' LIMIT 1";
		$results= mysqli_query($conn,$sql);
			

		if(mysqli_num_rows($results) == 1)
		{
			// elseif the user is an staff he/she will redirect to the main index 
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['usertype'] == 'administrator') {
				$_SESSION['userid'] = $logged_in_user;
				// $_SESSION['status'] = "Good job";
				// $_SESSION['status_text'] = "Hello Welcome User";
				// $_SESSION['status_code'] = "success";
				$_SESSION['success'] = "Woops! Something Went Wrong";
				header("location: main/index.php");
				
			}

			// elseif the user is an staff he/she will redirect to index 
			elseif ($logged_in_user['usertype'] == 'staff') {
				$_SESSION['userid'] = $logged_in_user;
				$_SESSION['status'] = "Good job";
				$_SESSION['status_text'] = "Hello Welcome User";
				$_SESSION['status_code'] = "success";
				header("location: index.php");
			}
			
			// elseif the user is not an admin or staff he/she will redirect to userindex 
			elseif ($logged_in_user['usertype'] != 'administrator' || 'staff') {
				$_SESSION['userid'] = $logged_in_user;
				$_SESSION['status'] = "Good job";
				$_SESSION['status_text'] = "Hello Welcome User";
				$_SESSION['status_code'] = "success";
				header("location: userindex.php");
			}
			
		}
		else
		{
			$_SESSION['userid'] = $logged_in_user;
            $_SESSION['status'] = "Error";
			$_SESSION['status_text'] = "Password Did Not Matched.";
			$_SESSION['status_code'] = "error";
            header("location: login.php");
		}
	}
	

?>