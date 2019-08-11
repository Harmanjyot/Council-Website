<?php  
 require "../php/conn.php";
 $output = '';  
 $sql = "SELECT * FROM sponsorData ORDER BY SrNo";  
 $result = mysqli_query($conn, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Sr. No</th>  
                     <th width="20%">Sponsor Name</th>  
                     <th width="20%">Sponsor Link</th>  
                     <th width="10%">Sponsor Image</th>
                     <th width="50%">Image Preview</th>
                     <th width="10%">Delete</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["SrNo"].'</td>  
                     <td class = "sponsor_name" data-id1="'.$row["SrNo"].'" contenteditable>'.$row["sponsorName"].'</td>  
                     <td class = "sponsor_link" data-id2="'.$row["SrNo"].'" contenteditable>'.$row["sponsorLink"].'</td>  
                     <td>
                        <button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["SrNo"].'">Upload</button>
                      </td>
                      <td>
                        <img src="data:image/jpeg;base64,'.base64_encode($row['sponsorImage'] ).'" height="200" width="200" />
                      </td>
                     <td><button type="button" name="delete_btn" data-id5="'.$row["SrNo"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="sponsor_name" contenteditable></td>  
                <td id="sponsor_link" contenteditable></td>  
                <td> </td>
                <td> </td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td></td>  
                          <td id="sponsor_name" contenteditable></td>  
                          <td id="sponsor_link" contenteditable></td>  
                          <td> </td>
                          <td> </td>
                          <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td> 
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  

 echo $output;  
 ?>