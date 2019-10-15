<?php
	require "conn.php";

	$rollno = $_POST['roll'];
	$sql = "INSERT INTO paymentverification Values('$rollno', '1')";
	$result =  mysqli_query($conn, $sql);
        echo mysqli_error($conn);
?>