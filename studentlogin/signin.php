<?php 

require "../php/conn.php";

$name = $_POST['name'];
$rollno = $_POST['rollno'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$sem = $_POST['sem'];
$gender = $_POST['gender'];
$password = $_POST['password'];

$sql = "INSERT INTO studentslogindata(rollno, name, email, branch, semester, gender, password) VALUES('$rollno', '$name', '$email', '$branch', '$sem', '$gender', '$password')";
		
if (mysqli_query($conn, $sql)) {
   	require "studentlogin.php";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

?>