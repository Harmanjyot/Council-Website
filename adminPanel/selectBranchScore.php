<?php  
 require "../php/conn.php";
 $output = '';  
 $sql = "SELECT * FROM branchScore";  
 $result = mysqli_query($conn, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width ="10%">Sr No</th>
                     <th width="30%">Branch Name</th>  
                     <th width="30%">Score</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td class = "branch_id">'.$row["SrNo"].'</td>
                     <td class = "branch_name" data-id1="'.$row["SrNo"].'">'.$row["branchName"].'</td> 
                     <td class = "branch_score" data-id3="'.$row["SrNo"].'" contenteditable>'.$row["Score"].'</td>  
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