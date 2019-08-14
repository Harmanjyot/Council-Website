<?php 

require "../php/conn.php";

$username = $_POST['name'];
$rollno = $_POST['rollno'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$password = $_POST['password'];


$passHash = password_hash($password, PASSWORD_DEFAULT);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username) && !preg_match("/^[a-zA-Z0-9]*$/", $rollno)) {
		header("Location: studentsignin.php?error=invalidmail&uid=");
		exit();      # invalid email and uid error handler
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: studentsignin.php?error=invalidmail&uid=".$username);
		exit();      # invalid email error handler
	}

	else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		header("Location: studentsignin.php?error=invaliduid&mail=".$email);
		exit();       # invalid uid error handler
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $rollno)){
	header("Location: studentsignin.php?error=invaliduid&mail=".$email);
	exit();
	}
	else {
		$sql = "INSERT INTO studentdata(studentRoll, studentName, studentEmail, studentBranch, studentYear, studentGender, studentPass) VALUES(?, ?, ?, ?, ?, ?, ?)";
		$stmt = mysqli_stmt_init($conn);
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt,"isssiss", $rollno, $username, $email, $branch, $year, $gender, $passHash);
		mysqli_stmt_execute($stmt);
		$stmt->close();

		$sql = "SELECT userID FROM studentdata WHERE studentRoll='$rollno'";
		$result = mysqli_query($conn, $sql);
		$userid = mysqli_fetch_array($result);

		$sql = "SELECT branchID FROM branchdata WHERE branchName='$branch'";
		$result = mysqli_query($conn, $sql);
		$branchid = mysqli_fetch_array($result);

		$sql = "INSERT INTO studentcriteria(studentID, branchID) VALUES(?,?)";
		$stmt = mysqli_stmt_init($conn);
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt,"ss",$userid[0], $branchid[0]);
		mysqli_stmt_execute($stmt);
		$stmt->close();

		// $sql = "INSERT INTO studentData(studentRoll, studentName, studentEmail, studentBranch, studentYear, studentGender, studentPass) VALUES('$rollno', '$username', '$email', '$branch', '$sem', '$gender', '$passHash')";
	}

	require "studentlogin.php";
?>