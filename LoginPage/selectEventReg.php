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
                     <td width="30%" ><label><b>Event Name</b></label></td>  
                     <td width="70%" class = "event_name" data-id1="'.$row["SrNo"].'">'.$row["eventName"].'</td> 
                     <td rowspan="5"> <img src="data:image/jpeg;base64,'.base64_encode($row['eventImage'] ).'" height="400" width="300" /> </td> 
                </tr>  
                <tr>  
                     <td width="30%"><label><b>Event Date</b></label></td>  
                     <td width="70%">'.$row["eventDate"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label><b>Event Time</b></label></td>  
                     <td width="70%">'.$row["eventTime"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label><b>Event Description<b></label></td>  
                     <td width="70%">'.$row["eventDescription"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label><b>Event Capacity</b></label></td>  
                     <td width="70%">'.$row["eventCapacity"].'</td>  
                </tr>  
                ';  
      }  
      $output .= '</table></div>

      ';  
      echo $output;  
 
 ?>