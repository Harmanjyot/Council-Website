<?php  
 require "../php/conn.php" ;
 $sql = "INSERT INTO sponsorData(sponsorName, sponsorLink) VALUES('".$_POST["sponsor_name"]."', '".$_POST["sponsor_link"]."')";  
 if(mysqli_query($conn, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 