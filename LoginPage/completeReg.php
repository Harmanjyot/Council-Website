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
 		$query = "INSERT INTO eventRegistrations(studentID, eventID) VALUES ('".$_POST["userid"]."', '".$event_id."')";
 		$result = mysqli_query($conn, $query);
 		echo "Registration completed";
 	}
 	else {
 		echo "Registrations full";
 	}

?>