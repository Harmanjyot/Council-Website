<?php  

require "../php/conn.php" ;

$eventName = $_POST['cultural_name'];
$eventDate = $_POST['cultural_date'];
$eventTime = $_POST['cultural_time'];
$eventDescription = $_POST['cultural_desc'];
$eventCapacity = $_POST['cultural_limit'];
$e=1;

if($eventName == '') {
	echo "Event name cannot be empty<br>";
	$e=0;
}
if($eventDate == '') {
	echo "Event date cannot be empty<br>";
	$e=0;
}
if($eventTime == '') {
	echo "Time cannot be empty";
	$e=0;
}
if($e==1) {
	$sql = "INSERT INTO eventlist(eventName, eventDate, eventTime, eventDescription, eventType, eventCapacity) VALUES('$eventName', '$eventDate', '$eventTime', '$eventDescription', 'Cultural', '$eventCapacity')";  
	if(mysqli_query($conn, $sql))  
	{  
    	require "events_Cultural.php";
	}  
}

?> 