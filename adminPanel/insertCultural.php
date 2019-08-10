<?php  

require "../php/conn.php" ;

$eventName = $_POST['cultural_name'];
$eventDate = $_POST['cultural_date'];
$eventTime = $_POST['cultural_time'];
$eventDescription = $_POST['cultural_desc'];
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
	$sql = "INSERT INTO culturaleventlist(eventName, eventDate, eventTime, eventDescription) VALUES('$eventName', '$eventDate', '$eventTime', '$eventDescription')";  
	if(mysqli_query($conn, $sql))  
	{  
    	echo 'Data Inserted';
	}  
}

?> 