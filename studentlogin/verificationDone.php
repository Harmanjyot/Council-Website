<?php

require "../php/conn.php";

if (isset($_GET["vkey"])) {
	$vkey = $_GET["vkey"];
	$query = "SELECT SrNo FROM studentVerification WHERE vkey = '$vkey' and verified = '0'";
	$result = mysqli_query($conn, $query);
    echo $result->num_rows;
	if($result->num_rows == 1){
 
    // update the 'verified' field, from 0 to 1 (unverified to verified)
    $query = "UPDATE studentVerification
                set verified = '1'
                where vkey = '$vkey'";
 
    $result = mysqli_query($conn, $query);
    $query = "SELECT * FROM studentVerification";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    if($result){
        // tell the user
        
        $roll = $row["studentRoll"];
        $name = $row["studentName"];
        $email = $row["studentEmail"];
        $branch = $row["studentBranch"];
        $year = $row["studentYear"];
        $gender = $row["studentGender"];
        $pass = $row["studentPassword"];

        $sql = "INSERT INTO studentData(studentRoll, studentName, studentEmail, studentBranch, studentYear, studentGender, studentPass) VALUES('$roll', '$name', '$email', '$branch', '$year', '$gender', '$pass')";
        $result = mysqli_query($conn, $sql);

        $sql = "INSERT INTO studentCriteria(studentID, branchID, culturalEvent, sport_technicalEvent, criteriaStatus) VALUES('$roll', '$branch', '0', '0', '0')";
        $result = mysqli_query($conn, $sql);
        
        $sql = "SELECT * FROM branchData where branchName = '$branch' and branchYear='$year'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        $registered = $row["branchRegistration"];
        $newRegis = $registered + 1;
        
        $sql = "UPDATE branchData SET branchRegistration = '$newRegis' WHERE branchName = '$branch' and branchYear = '$year'";
        $result = mysqli_query($conn, $sql);
        
        echo "<div>Your email is valid, thanks!. You may now login.</div>";
    }
    else
    {
        echo "<div>Unable to update verification code.</div>";
        //print_r($stmt->errorInfo());
    }
 
}
else
{
    // tell the user he should not be in this page
    echo "<div>We can't find your verification code.</div>";
}
}
else {
	die("Something Went wrong!") ;
}


?>