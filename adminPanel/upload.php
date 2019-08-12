<?php
// Include the database configuration file
include '../php/conn.php';

if($_POST["action"] == "update")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "UPDATE eventlist SET eventImage ='".$file."' WHERE SrNo='".$_POST["image_id"]."'";
  if(mysqli_query($conn, $query))
  {
   echo 'Image Updated into Database';
  }
 }

?>
