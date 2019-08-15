<?php  
 require "../php/conn.php";
 $output = '';  
 $sql = "SELECT * FROM studentData ORDER BY studentRoll";  
 $result = mysqli_query($conn, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Sr. No</th>  
                     <th width="20%">Roll No</th> 
                     <th width="30%">Name</th>  
                     <th width="15%">Branch</th>  
                     <th width="15%">Year</th>    
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["userID"].'</td>  
                     <td class = "rollno" data-id1="'.$row["userID"].'" contenteditable>'.$row["studentRoll"].'</td>  
                     <td class = "name" data-id2="'.$row["userID"].'" contenteditable>'.$row["studentName"].'</td>  
                     <td class = "branch" data-id3="'.$row["userID"].'" contenteditable>'.$row["studentBranch"].'</td>  
                     <td class = "year" data-id4="'.$row["userID"].'" contenteditable>'.$row["studentYear"].'</td>  
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