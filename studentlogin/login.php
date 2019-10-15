<?php

require "../php/conn.php";

$rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


$sql = "SELECT * FROM studentdata WHERE studentRoll = ?";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt,"i", $rollno);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);		
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);

				if ($password != $row['studentPass']) {
					echo "Wrong Password or Roll No.";
					exit();
				}
				else if ($password == $row['studentPass']) {

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