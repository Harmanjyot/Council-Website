<?php

require "../php/conn.php";
 $query = "SELECT * FROM eventList WHERE eventName = '".$_POST["event_name"]."'";  
 $result = mysqli_query($conn, $query); 
 $row = mysqli_fetch_array($result);
 $event_id = (int)$row["SrNo"];
 $capacity = (int)$row["eventCapacity"];
 $query = "SELECT count(*) as total FROM eventRegistrations where eventID = '".$event_id."'";
 $result = mysqli_query($conn, $query);
 $data = mysqli_fetch_assoc($result);
 $rowCount = $data['total'];
 	if ($capacity > $rowCount) {

 		$query = "SELECT * FROM eventRegistrations WHERE studentRoll = '".$_POST["userroll"]."' AND eventID = '".$event_id."'";
 		$result = mysqli_query($conn, $query);
 		if ($result->num_rows > 0) {
 			echo "Registered already!";
 		}
 		else
 		{
 		$query = "INSERT INTO eventRegistrations(studentID, studentRoll, eventID) VALUES ('".$_POST["userid"]."', '".$_POST["userroll"]."' , '".$event_id."')";
 		$result = mysqli_query($conn, $query);

 		$cultural = false;
 		$sport = false;

 		// $sql = "SELECT * FROM studentcriteria WHERE "

 		$sql = "SELECT eventType FROM eventlist WHERE SrNo = '$event_id'";
 		$result = mysqli_query($conn, $sql);
 		$eventType = mysqli_fetch_array($result);

 		if($eventType[0] == "Sports") {
 			$sport = true;
 		} else {
 			$cultural = true;
 		}
 		$query = "UPDATE studentcriteria SET culturalEvent='$cultural', sport_technicalEvent='$sport' WHERE studentID='".$_POST["userid"]."' criteriaStatus = '1'";
 		$result = mysqli_query($conn, $query);

 		$query = "SELECT * FROM studentData WHERE studentRoll = '".$_POST["userroll"]."'";
 		$result = mysqli_query($conn, $query);
 		$row = mysqli_fetch_array($result);
 		$branch = $row["studentBranch"];
 		$year = $row["studentYear"];

 		$query = "SELECT * FROM branchData WHERE branchName = '$branch' and branchYear = '$year'";
 		$result = mysqli_query($conn, $query);
 		$row = mysqli_fetch_array($result);
 		$criteria = $row["branchCriteria"];
 		$newCrite = $criteria + 1;
 		$sql = "UPDATE branchData SET branchCriteria = '$newCrite' WHERE branchName = '$branch' and branchYear = '$year'";
        $result = mysqli_query($conn, $sql);
        

 		echo "Registration completed";
 		}

 		
 	}
 	else {
 		echo "Registrations full";
 	}

?>