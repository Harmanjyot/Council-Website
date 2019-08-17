<?php

require "../php/conn.php";

$rollno = $_POST['rollno'];
$password = $_POST['password'];


$sql = "SELECT * FROM studentdata WHERE studentRoll = ?";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt,"i", $rollno);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);		
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);

				$pwdCheck = password_verify($password, $row['studentPass']);
				if ($pwdCheck == false) {
					echo "Wrong Password or Roll No.";
					exit();
				}
				else if ($pwdCheck == true) {

					session_start();
					$_SESSION['userId'] = $row['userID'];
					$_SESSION['userRoll'] = $row['studentRoll'];

					header("Location: ../LoginPage/homepage.php?login=success");
					exit();
				}}
				else{
					echo "Wrong Password or Roll No.";
				}


?>