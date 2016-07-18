<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		
		$question1 = $_POST['question1'];
		$answer1 = $_POST['answer1'];
		
		$question2 = $_POST['question2'];
		$answer2 = $_POST['answer2'];
		
		$sql = "INSERT INTO tbl_users (firstname,lastname,username,password,email,mobile,address,question1,answer1,question2,answer2) 
				values ('$firstname','$lastname','$username','$password','$email','$mobile','$address','$question1','$answer1','$question2','$answer2')";

		
		require_once('dbConnect.php');
		
	
		if(mysqli_query($con,$sql))
		{
			echo "Successfully Registered";
		}
		else
		{
			echo "Could not register.";
		}
		
		mysqli_close($con);
	}
	
?>