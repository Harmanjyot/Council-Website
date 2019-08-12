<?php  

      $output = '';  
      require "../php/conn.php";
      $query = "SELECT * FROM eventList WHERE SrNo = '".$_POST["event_id"]."'";  
      $result = mysqli_query($conn, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">
           ';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Event Name</label></td>  
                     <td width="70%">'.$row["eventName"].'</td> 
                     <td rowspan="5"> <img src="data:image/jpeg;base64,'.base64_encode($row['eventImage'] ).'" height="400" width="300" /> </td> 
                </tr>  
                <tr>  
                     <td width="30%"><label>Event Date</label></td>  
                     <td width="70%">'.$row["eventDate"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Event Time</label></td>  
                     <td width="70%">'.$row["eventTime"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Event Description</label></td>  
                     <td width="70%">'.$row["eventDescription"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Event Capacity</label></td>  
                     <td width="70%">'.$row["eventCapacity"].'</td>  
                </tr>  
                ';  
      }  
      $output .= '</table></div> 
      <button type="button" name="registerEvent" class="btn btn-default" data-dismiss="modal">Register</button>
      ';  
      echo $output;  
 
 ?>