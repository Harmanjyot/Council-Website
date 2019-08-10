<?php

require "../php/conn.php";
	
$srno = $_POST['id'];
$eventName = $_POST['cultural_name'];
$eventDate = $_POST['cultural_date'];
$eventTime = $_POST['cultural_time'];
$eventDescription = $_POST['cultural_desc'];

$sql = "UPDATE culturaleventlist SET eventName='$eventName',eventDate='$eventDate',eventTime='$eventTime',eventDescription='$eventDescription' WHERE SrNo = '$srno'";
if(mysqli_query($conn, $sql)) {
    require 'events_Cultural.php';
}

?>