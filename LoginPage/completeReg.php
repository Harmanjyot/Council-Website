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
 		$query = "UPDATE studentcriteria SET culturalEvent='$cultural', sport_technicalEvent='$sport' WHERE studentID='".$_POST["userid"]."'";
 		$result = mysqli_query($conn, $query);
 		echo "Registration completed";
 	}
 	else {
 		echo "Registrations full";
 	}

?>