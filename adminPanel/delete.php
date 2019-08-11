<?php  
 require "../php/conn.php";
 $sql = "DELETE FROM eventlist WHERE SrNo = '".$_POST["id"]."'";  
 if(mysqli_query($conn, $sql))  
 {  
    echo 'Data Deleted';  
 }  
 ?>