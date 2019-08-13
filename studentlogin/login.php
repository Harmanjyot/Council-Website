<?php

require "../php/conn.php";

$rollno = $_POST['rollno'];
$password = $_POST['password'];


$sql = "SELECT * FROM studentdata WHERE studentRoll = ?";
echo "FIRST";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt,"s", $rollno);
mysqli_stmt_execute($stmt);
echo "SECOND";
$result = mysqli_stmt_get_result($stmt);
echo "THREE";			
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				echo "FOUR";
				echo $row["userID"];
				$pwdCheck = password_verify($password, $row['studentPass']);
				if ($pwdCheck == false) {
					echo "false";
					exit();
				}
				else if ($pwdCheck == true) {
					echo "this is here";
					session_start();
					$_SESSION['userId'] = $row['userID'];
					$_SESSION['userRoll'] = $row['studentRoll'];

					header("Location: ../LoginPage/homepage.php?login=success");
					exit();
				}}


?>