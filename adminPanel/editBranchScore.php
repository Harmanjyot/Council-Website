<?php  
 require "../php/conn.php";
 $id = $_POST["id"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE branchScore SET ".$column_name."='".$text."' WHERE SrNo='".$id."'";  
 if(mysqli_query($conn, $sql))  
 {  
      echo 'Data Updated';  
 }  
 ?>