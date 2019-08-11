<?php  
 require "../php/conn.php" ;
 $sql = "INSERT INTO eventlist(eventName, eventDate, eventTime, eventDescription, eventType, eventCapacity) VALUES('".$_POST["sport_name"]."', '".$_POST["sport_date"]."', '".$_POST["sport_time"]."', '".$_POST["sport_desc"]."' , '".$_POST["event_Type"]."', '".$_POST["sport_limit"]."')";  
 if(mysqli_query($conn, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 