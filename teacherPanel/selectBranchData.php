<?php  
 require "../php/conn.php";
 $output = '';  
 $sql = "SELECT * FROM branchData ORDER BY BranchID DESC";  
 $result = mysqli_query($conn, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Sr. No</th>  
                     <th width="20%">Branch Name</th>  
                     <th width="20%">Year</th>  
                     <th width="20%">Class Strength</th>  
                     <th width="20%">Total Registrations</th> 
                     <th width="20%">Criteria Completed</th>
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["branchID"].'</td>  
                     <td class = "branch_name" data-id1="'.$row["branchID"].'" >'.$row["branchName"].'</td>  
                     <td class = "branch_year" data-id2="'.$row["branchID"].'" >'.$row["branchYear"].'</td>  
                     <td class = "branch_strength" data-id3="'.$row["branchID"].'">'.$row["branchStrength"].'</td>  
                     <td class = "branch_regis" data-id4="'.$row["branchID"].'" >'.$row["branchRegistration"].'</td>  
                     <td class = "branch_criteria" data-id6="'.$row["branchID"].'" >'.$row["branchCriteria"].'</td>
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="branch_name"></td>  
                <td id="branch_year"></td>  
                <td id="branch_strength"></td>  
                <td id="branch_regis" ></td> 
                <td id="branch_criteria" ></td>
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td></td>  
                          <td id="branch_name" ></td>  
                          <td id="branch_year" ></td>  
                          <td id="branch_strength"></td>  
                          <td id="branch_regis" ></td> 
                          <td id="branch_criteria" ></td>
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  

 echo $output;  
 ?>