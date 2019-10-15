<?php  
 require "../php/conn.php";
$sql = "SELECT * FROM eventRegistrations where SrNo = '".$_POST["id"]."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$event = $row["eventID"];
$roll = $row["studentRoll"];

$sql = "SELECT * FROM studentData WHERE studentRoll = '$roll'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$year = $row["studentYear"];
$branch = $row["studentBranch"];

$sql = "SELECT * FROM eventList where SrNo = '$event'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$type = $row["eventType"];

$sql= "SELECT * FROM studentCriteria where studentID= '$roll'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$criteria = $row["criteriaStatus"];
$cultural = $row["culturalEvent"];
$sport_tech = $row["sport_technicalEvent"];
if ( $type =="Cultural" ) {
	$sql= "UPDATE studentCriteria SET culturalEvent = '0'  where studentID= '$roll'";
	$result = mysqli_query($conn, $sql);
	$column = "culturalEvent";
}
else if ($type == "Sports")
{

	$sql= "UPDATE studentCriteria SET sport_technicalEvent = '0' where studentID= '$roll'";
	$result = mysqli_query($conn, $sql);
	$column = "sport_technicalEvent";
}

 $sql = "DELETE FROM eventRegistrations WHERE SrNo = '".$_POST["id"]."'";  
 $result = mysqli_query($conn, $sql);
 $sql = "SELECT eventRegistrations.eventID, eventRegistrations.studentRoll, eventList.SrNo, eventList.eventType, studentdata.studentRoll from eventRegistrations INNER JOIN eventList ON eventRegistrations.eventID = eventList.SrNo INNER JOIN studentdata ON studentData.studentRoll = eventRegistrations.studentRoll where eventList.eventType = '$type' and studentData.studentRoll = '$roll'";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_num_rows($result);
 echo $row;
 if ($row > 0) {
 	echo $row;
 	$sql = "UPDATE studentCriteria SET $column = '1', criteriaStatus = '1' where studentID = '$roll'";
 	 $result = mysqli_query($conn, $sql);
 }
 $sql = "SELECT eventRegistrations.eventID, eventRegistrations.studentRoll, eventList.SrNo, eventList.eventType from eventRegistrations JOIN eventList ON eventRegistrations.eventID = eventList.SrNo where eventRegistrations.eventID = '$event' and eventRegistrations.studentRoll = '$roll'";
	 $result = mysqli_query($conn, $sql);
	 $row = mysqli_num_rows($result);
	 echo $row;
	 if ($row == 0) 
	 {
	 	echo $branch;
	 	echo $year;
	 	$sql = "SELECT * FROM branchData WHERE branchName = '$branch' and branchYear = '$year'";
	 	$result = mysqli_query($conn, $sql);
	 	$row = mysqli_fetch_array($result);
	 	$branchCrit = $row["branchCriteria"];
	 	$newCrit = $branchCrit - 1;
	 	echo $newCrit;
	 	$sql = "UPDATE branchData SET branchCriteria = '$newCrit' WHERE branchName = '$branch' and branchYear = '$year'";
	 	$result = mysqli_query($conn, $sql);
	 	$sql = "UPDATE studentCriteria SET criteriaStatus = '0' where studentID = '$roll'";
	 	$result = mysqli_query($conn, $sql);

 	}


 require "../php/setBranch.php";
 ?>