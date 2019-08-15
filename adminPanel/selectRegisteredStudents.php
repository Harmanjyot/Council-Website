<?php  
 require "../php/conn.php";
 $output = '';  
 $event_id = $_POST["search_id"];
 echo $event_id;
 $sql = "SELECT * FROM eventList WHERE eventName = '$event_id'";  
 $result = mysqli_query($conn, $sql); 
 $row = mysqli_fetch_array($result);
 $event_id = $row["SrNo"];

 $sql = "SELECT * FROM eventRegistrations WHERE eventID = '$event_id' ORDER BY SrNo";  
 $result = mysqli_query($conn, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Sr. No</th>  
                     <th width="20%">Roll No</th>   
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["SrNo"].'</td>  
                     <td>'.$row["studentRoll"].'</td>  
                </tr>  
           ';  
      }  

 }  
 else  
 {  
 }  
 $output .= '</table>  
      </div>';  

 echo $output;  
 ?>