<?php  
 require "../php/conn.php";
 $id = $_POST["id"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE branchData SET ".$column_name."='".$text."' WHERE branchID='".$id."'";  
 if(mysqli_query($conn, $sql))  
 {  
      echo 'Data Updated';  
 }  
 ?>