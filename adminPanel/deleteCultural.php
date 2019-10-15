<?php  

require "../php/conn.php";

$srno = $_POST['id'];
$sql = "DELETE FROM eventlist WHERE SrNo = '$srno'";
if(mysqli_query($conn, $sql)) {
    echo "Data deleted";
}
require "../php/setBranch.php";

?>