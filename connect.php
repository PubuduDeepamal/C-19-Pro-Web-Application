<?php
	$firstName = $_POST['full-name'];
	$niccontact = $_POST['niccontact'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$DOB = $_POST['DOB'];
	$address = $_POST['address'];


	// Database connection
	$conn = new mysqli('localhost:3308','root','','c-19vaccine');
	if($conn->connect_error){
		
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into dregister(firstName, niccontact, contact, email, gender, DOB, address) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("siissis", $firstName, $niccontact, $contact, $email, $gender, $DOB, $address);
		 $stmt->execute();
		
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>