<?php
require_once 'phpqrcode/qrlib.php';

$conn = mysqli_connect('localhost' , 'root' , '' ,'fest');
if($conn-> connect_error) {
	die("Connection failed:".$conn-> connect_error);
}

$sql = "SELECT studentID FROM studentcriteria WHERE criteriaStatus = '1'";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
	while($row = $result-> fetch_assoc()){
		echo $row["studentID"];
	
		$text = $row["studentID"]; 

 		$path = 'images/';
  		$file = $path.uniqid().".png";

  		QRcode::png($text, $file, 'L', 10, 2);
  		//png($text, $file, ECC_LEVEL, Pixel_Size, Frame_size)

  		echo "<center><img src='".$file."'>";
  	}
}
 $conn-> close();