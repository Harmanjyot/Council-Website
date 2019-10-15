<?php

require "../php/conn.php";

$query = "SELECT * FROM statusTable WHERE SrNo = '1'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if ($row["sportSet"] == 1) {
	$query = "UPDATE statusTable SET sportSet = '0' WHERE SrNo = '1'";
	$result = mysqli_query($conn, $query);
}
else {
	$query = "UPDATE statusTable SET sportSet = '1' WHERE SrNo = '1'";
	$result = mysqli_query($conn, $query);	
}

header("Location: toExcel.php");


?>