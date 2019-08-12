<?php

require "../php/conn.php";
 $query = "SELECT * FROM eventList WHERE eventName = '".$_POST["event_name"]."' ";  
 $result = mysqli_query($conn, $query); 
 $row = mysqli_fetch_array($result);
 $event_id = (int)$row["SrNo"];
 $capacity = (int)$row["eventCapacity"];
 $query = "SELECT * FROM eventRegistrations where eventID = '".$event_id"'";
 $rowCount = mysqli_num_rows($result);
 	if ($capacity >= $rowCount) {
 		$query = "INSERT INTO eventRegistrations(studentID, eventID) VALUES ('".$_POST["userid"]."', '".$_POST["event_id"]."')";
 		$result = mysqli_query($conn, $query);
 		echo "Inserted";
 	}
 	else {
 		echo "Registrations full";
 	}

?>