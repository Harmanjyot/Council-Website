<?php  
 require "../php/conn.php";
 $output = '';  
 $eveID = $_POST["event_id"];
 $stuBranch = $_POST["branch"];
 $capRoll = $_POST["capRoll"];
   
 $query = "SELECT * FROM studentData WHERE studentRoll = '$capRoll'";  
 $result = mysqli_query($conn, $query); 
 $row = mysqli_fetch_array($result);
 $stuID = $row["userID"];
 $query = "SELECT * FROM eventList WHERE SrNo = '$eveID'";  
 $result = mysqli_query($conn, $query); 
 $row = mysqli_fetch_array($result);
 $event_id = (int)$row["SrNo"];
 $capacity = (int)$row["eventCapacity"];
 $teamCap = (int)$row["teamCapacity"];
  $output .= '  
  <h5>Once you click on the + button, you cannot make any changes to the team list. Please check once before confirming each player. </h5>
      <div class="table-responsive" >  
           <table class="table table-bordered" >  
                <tr>  
                     <th width="20%">Roll No</th>  
                     <th width="30%">First Name</th>  
                     <th width="15%">Year</th>  
                     <th width="10%">Add</th>  
                </tr>';  
 $query = "SELECT * FROM eventRegistrations WHERE SrNo = '$eveID' and teamLeader = '$capRoll' ORDER BY studentRoll";
 $result = mysqli_query($conn, $query);
 echo mysqli_error($conn);
 if ($result) {

  $sql = "SELECT studentData.studentRoll, studentData.studentName, studentData.studentYear FROM eventRegistrations JOIN studentData ON eventRegistrations.StudentRoll = studentData.StudentRoll WHERE eventRegistrations.eventID = '$eveID' and eventRegistrations.teamLeader = '$capRoll' ORDER BY studentData.studentRoll";  
 $result = mysqli_query($conn, $sql);  

 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>   
                     <td class = "roll_no">'.$row["studentRoll"].'</td>  
                     <td class = "player_name">'.$row["studentName"].'</td>  
                     <td class = "player_year">'.$row["studentYear"].'</td>  
                     <td> </td> 
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td id="roll_no" contenteditable></td>  
                <td id="player_name" contenteditable></td>  
                <td id="player_year" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {   
        $output .= '  
           <tr>   
                <td id="roll_no" contenteditable></td>  
                <td id="player_name" contenteditable></td>  
                <td id="player_year" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  

 }
 else
 {
          $output .= '  
           <tr>   
                <td id="roll_no" contenteditable></td>  
                <td id="player_name" contenteditable></td>  
                <td id="player_year" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }


 


 
 $output .= '</table>  
      </div>';  

 echo $output;  
 ?>