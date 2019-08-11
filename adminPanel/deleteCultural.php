<?php  

require "../php/conn.php";

$srno = $_POST['id'];
$sql = "DELETE FROM eventlist WHERE SrNo = '$srno'";
if(mysqli_query($conn, $sql)) {
    require "events_Cultural.php";
}

?>