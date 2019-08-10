<?php  

require "../php/conn.php";

$srno = $_POST['id'];
$sql = "DELETE FROM culturaleventlist WHERE SrNo = '$srno'";
if(mysqli_query($conn, $sql)) {
    echo 'Data Deleted';
}

?>