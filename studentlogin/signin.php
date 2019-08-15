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
		$sql = "SELECT SrNo FROM studentVerification WHERE studentRoll = ? and verified = '1' and studentEmail=?";
 		$stmt = mysqli_stmt_init($conn);
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt,"is", $rollno, $email);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
        $num = mysqli_stmt_num_rows($stmt);
        if($num>0){
            echo "<div>Your email is already activated.</div>";
        }
 
        else{
 
            // check first if there's unverified email related
            $sql = "SELECT SrNo FROM studentVerification WHERE studentEmail = ? and verified = '0' and studentRoll= ?";
            $stmt = mysqli_stmt_init($conn);
			mysqli_stmt_prepare($stmt, $sql);
			mysqli_stmt_bind_param($stmt,"is", $email, $rollno);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
            $num = mysqli_stmt_num_rows($stmt);
 			$stmt->close();
            if($num>0){
 
                // you have to create a resend verification script
                echo "<div>Your email is already in the system but not yet verified.</div>";
            }
 
            else{
            	$vkey = md5(time().$rollno);
                $to = $email;
                $subject = "Email verification";
                $message = "<a href = 'http://localhost/Council-Website/studentlogin/verificationDone.php?vkey=$vkey'>Register Account</a>";
                $headers = "From: councilfcrit@gmail.com";
                $headers .= "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

                if( mail($email, $subject, $message, $headers) ){
 
                    // tell the user a verification email were sent
                    echo "<div id='successMessage'>A verification email were sent to <b>" . $email . "</b>, please open your email inbox and click the given link so you can login.</div>";
 
 
                    // save the email in the database

                    //write query
                    $query = "INSERT INTO studentVerification( studentRoll, studentEmail, verified, studentPassword, vkey, studentName, studentBranch, studentYear, studentGender) VALUES( '$rollno', '$email' , '0', '$passHash', '$vkey', '$username', '$branch', '$year', '$gender' )";
 					$result = mysqli_query($conn, $query);

                    // Execute the query
                    if($result){
                        // echo "<div>Unverified email was saved to the database.</div>";
                    }else{
                        echo "<div>Unable to save your email to the database.";
                        //print_r($stmt->errorInfo());
                    }
 
                }else{
                    die("Sending failed.");
                }
            }





		// $sql = "INSERT INTO studentVerification(studentRoll, studentEmail, verified) VALUES(?, ? , '0')";
		// $stmt = mysqli_stmt_init($conn);
		// mysqli_stmt_prepare($stmt, $sql);
		// mysqli_stmt_bind_param($stmt,"is", $rollno, $email);
		// mysqli_stmt_execute($stmt);
		// $stmt->close();


		// $sql = "SELECT userID FROM studentdata WHERE studentRoll='$rollno'";
		// $result = mysqli_query($conn, $sql);
		// $userid = mysqli_fetch_array($result);

		// $sql = "SELECT branchID FROM branchdata WHERE branchName='$branch'";
		// $result = mysqli_query($conn, $sql);
		// $branchid = mysqli_fetch_array($result);

		// $sql = "INSERT INTO studentcriteria(studentID, branchID) VALUES(?,?)";
		// $stmt = mysqli_stmt_init($conn);
		// mysqli_stmt_prepare($stmt, $sql);
		// mysqli_stmt_bind_param($stmt,"ss",$userid[0], $branchid[0]);
		// mysqli_stmt_execute($stmt);
		// $stmt->close();

		// $sql = "INSERT INTO studentData(studentRoll, studentName, studentEmail, studentBranch, studentYear, studentGender, studentPass) VALUES('$rollno', '$username', '$email', '$branch', '$sem', '$gender', '$passHash')";
	}}

	require "studentlogin.php";
?>