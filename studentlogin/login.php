<?php

require "../php/conn.php";

$rollno = $_POST['rollno'];
$password = $_POST['password'];

$sql = "SELECT * FROM studentslogindata WHERE rollno = '$rollno' AND password = '$password'";

$results = mysqli_query($conn, $sql);
if(mysqli_num_rows($results)) {
	echo "Login successful";
} else {
	echo "Login unsuccessful";
}

?>