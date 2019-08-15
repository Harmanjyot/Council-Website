<?php

require "../php/conn.php";

$login = $_POST['name'];
$password = $_POST['password']; //fcritcouncil2022
// teacher : fcritfaculty2077
$sql = "SELECT * FROM admin WHERE login = ?";
echo "FIRST";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt,"s", $login);
mysqli_stmt_execute($stmt);
echo "SECOND";
$result = mysqli_stmt_get_result($stmt);
echo "THREE";			
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				echo "FOUR";
				echo $row["login"];
				$pwdCheck = password_verify($password, $row['password']);
				if ($pwdCheck == false) {
					echo "false";
					exit();
				}
				else if ($pwdCheck == true) {
					echo "this is here";
					session_start();
					$_SESSION['userId'] = $row['login'];
					// $_SESSION['userRoll'] = $row['studentRoll'];
					if($login == "admin") {
						header("Location: ../adminPanel/dashboard.php?login=success");
					} else {
						header("Location: ../teacherPanel/dashboard.php?login=success");
					}
					exit();
				}
			}


?>