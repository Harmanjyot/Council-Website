<?php  
 require "../php/conn.php";
 $output = '';  
 $sql = "SELECT studentData.studentName, studentData.studentBranch, studentData.studentYear, studentCriteria.criteriaStatus, studentCriteria.studentID FROM studentCriteria JOIN studentData ON studentData.studentRoll = studentCriteria.studentID WHERE criteriaStatus = '0' ORDER BY studentCriteria.studentID";  
 $result = mysqli_query($conn, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>   
                     <th width="15%">Roll No</th>  
                     <th width="20%">Name</th>   
                     <th width="20%">Branch</th> 
                     <th width="20%">Year</th>     
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["studentID"].'</td>  
                     <td>'.$row["studentName"].'</td>  
                     <td>'.$row["studentBranch"].'</td>
                     <td>'.$row["studentYear"].'</td>   
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