<?php  
 require "../php/conn.php";
 $output = '';  
 $sql = "SELECT * FROM eventlist ORDER BY SrNo DESC";  
 $result = mysqli_query($conn, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Sr. No</th>  
                     <th width="20%">Event Name</th>  
                     <th width="15%">Event Date</th>  
                     <th width="15%">Event Time</th>  
                     <th width="30%">Event Description</th>  
                     <th width="10%">Delete</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["SrNo"].'</td>  
                     <td class = "sport_name" data-id1="'.$row["SrNo"].'" contenteditable>'.$row["eventName"].'</td>  
                     <td class = "sport_date" data-id2="'.$row["SrNo"].'" contenteditable>'.$row["eventDate"].'</td>  
                     <td class = "sport_time" data-id3="'.$row["SrNo"].'" contenteditable>'.$row["eventTime"].'</td>  
                     <td class = "sport_desc" data-id4="'.$row["SrNo"].'" contenteditable>'.$row["eventDescription"].'</td>  
                     <td><button type="button" name="delete_btn" data-id5="'.$row["SrNo"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="sport_name" contenteditable></td>  
                <td id="sport_date" contenteditable></td>  
                <td id="sport_time" contenteditable></td>  
                <td id="sport_desc" contenteditable></td> 
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td></td>  
                          <td id="sport_name" contenteditable></td>  
                          <td id="sport_date" contenteditable></td>  
                          <td id="sport_time" contenteditable></td>  
                          <td id="sport_desc" contenteditable></td> 
                          <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td> 
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>