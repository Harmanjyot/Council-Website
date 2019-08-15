<?php  
 require "../php/conn.php";
 $output = '';  
 $sql = "SELECT * FROM studentCriteria WHERE criteriaStatus = '0' ORDER BY studentID";  
 $result = mysqli_query($conn, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>   
                     <th width="20%">Roll No</th> 
                     <th width="15%">Branch</th>    
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["studentID"].'</td>  
                     <td class = "rollno" data-id1="'.$row["studentID"].'" contenteditable>'.$row["branchName"].'</td>    
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