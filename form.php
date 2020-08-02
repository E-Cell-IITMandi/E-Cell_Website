<?php 
		
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$conn=mysqli_connect('localhost','ecell','ECELL@1234#','ecell');
	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];


	$sql = "INSERT INTO contactform(name,email,message)	VALUES('$name','$email','$message')";
	if (mysqli_query($conn, $sql)) {
    	echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
	
?>

