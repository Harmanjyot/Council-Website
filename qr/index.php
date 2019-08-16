<?php
require_once 'phpqrcode/qrlib.php';
require "../php/conn.php";
session_start() ;

$userRoll = $_SESSION["userRoll"];
if (isset($_POST["qr-generate"])){
 	require_once 'phpqrcode/qrlib.php';
 	$sql = "SELECT * FROM studentdata WHERE studentRoll='$userRoll'";
 	$res = mysqli_query($conn, $sql);
 	$data=mysqli_fetch_assoc($res);
 	$output = $data["studentRoll"];
 	QRcode::png($output);
                      
 	$conn-> close();
}
//echo "abcd";  