<?php  
 require "../php/conn.php";
 $output = '';  
 $event_id = $_POST["search_id"];
 echo $event_id;
 $sql = "SELECT * FROM eventList WHERE eventName = '$event_id'";  
 $result = mysqli_query($conn, $sql); 
 $row = mysqli_fetch_array($result);
 $event_id = $row["SrNo"];

 $sql = "SELECT eventRegistrations.SrNo, studentData.studentRoll, studentdata.studentName, studentdata.studentBranch, studentdata.studentYear, eventregistrations.eventID FROM eventRegistrations JOIN studentData ON eventregistrations.studentRoll = studentdata.studentRoll WHERE eventRegistrations.eventID = '$event_id' ORDER BY studentData.studentBranch";  
 $result = mysqli_query($conn, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Roll No</th>  
                     <th width="20%">Name</th>   
                     <th width="20%">Branch</th> 
                     <th width="20%">Year</th> 
                     <th width="20%">Delete</th>
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["studentRoll"].'</td>  
                     <td>'.$row["studentName"].'</td>  
                     <td>'.$row["studentBranch"].'</td>
                     <td>'.$row["studentYear"].'</td>
                     <td><button type="button" name="delete_btn" data-id5="'.$row["SrNo"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>
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