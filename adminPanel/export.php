<?php  
//export.php  
require "../php/conn.php";
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM branchScore";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
    $output .= '
   <h1> <b> Branch Scores </b></h1>';
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Branch Name</th>  
                         <th>Score</th>    
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["branchName"].'</td>  
                         <td>'.$row["Score"].'</td>  
                    </tr>
   ';
  }
  $output .= '</table>';


 }

$query = "SELECT * FROM eventList";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
 {
    $output .= '
   <h1> <b> Events Conducted </b></h1>';
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Event Name</th>  
                         <th>Event Date</th>   
                         <th>Event Time</th>
                         <th>Event Description</th>
                         <th>Event Capacity</th>
                         <th>Event Type</th> 
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["eventName"].'</td>  
                         <td>'.$row["eventDate"].'</td> 
                         <td>'.$row["eventTime"].'</td>
                         <td>'.$row["eventDescription"].'</td>
                         <td>'.$row["eventCapacity"].'</td>
                         <td>'.$row["eventType"].'</td> 
                    </tr>
   ';
  }
  $output .= '</table>';

 }

$query = "SELECT * FROM studentData";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
 {
    $output .= '
   <h1> <b> Student Data </b></h1>';
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Student Name</th>  
                         <th>Roll No</th>   
                         <th>Email</th>
                         <th>Branch</th>
                         <th>Year</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["studentName"].'</td>  
                         <td>'.$row["studentRoll"].'</td> 
                         <td>'.$row["studentEmail"].'</td>
                         <td>'.$row["studentBranch"].'</td>
                         <td>'.$row["studentYear"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';


 }

$query = "SELECT * FROM eventList";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
 {

  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <h1> <b>'.$row["eventName"].' </b></h1>';
   $event_id = $row["SrNo"];
   $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Student Name</th>  
                         <th>Roll No</th>   
                         <th>Branch</th>
                         <th>Year</th>
                    </tr>
  ';


    $sql = "SELECT eventRegistrations.SrNo, studentData.studentRoll, studentdata.studentName, studentdata.studentBranch, studentdata.studentYear, eventregistrations.eventID FROM eventRegistrations JOIN studentData ON eventregistrations.studentRoll = studentdata.studentRoll WHERE eventRegistrations.eventID = '$event_id'";
    $resultInner = mysqli_query($conn, $sql);

    while ($rowInner = mysqli_fetch_array($resultInner)) {
      $output .= '
                      <tr>  
                         <td>'.$rowInner["studentName"].'</td>  
                         <td>'.$rowInner["studentRoll"].'</td> 
                         <td>'.$rowInner["studentBranch"].'</td>
                         <td>'.$rowInner["studentYear"].'</td>
                    </tr>
   ';
    }
      $output .= '</table>';
  }


 }


 $query = "SELECT * FROM sponsorData";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Sponsor Name</th>  
                         <th>Sponsor Link</th>   
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["sponsorName"].'</td>  
                         <td>'.$row["sponsorLink"].'</td> 
                    </tr>
   ';
  }
  $output .= '</table>';
 }

$query = "SELECT studentData.studentName, studentData.studentBranch, studentData.studentYear, studentCriteria.criteriaStatus, studentCriteria.studentID FROM studentCriteria JOIN studentData ON studentData.studentRoll = studentCriteria.studentID WHERE criteriaStatus = '1' ORDER BY studentCriteria.studentID";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <h1> <b> Criteria Completed </b></h1>';
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Student Name</th>  
                         <th>Roll No</th>   
                         <th>Branch</th>
                         <th>Year</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["studentName"].'</td>  
                         <td>'.$row["studentID"].'</td> 
                         <td>'.$row["studentBranch"].'</td> 
                         <td>'.$row["studentYear"].'</td> 
                    </tr>
   ';
  }
  $output .= '</table>';
 }


 $query = "SELECT studentData.studentName, studentData.studentBranch, studentData.studentYear, studentCriteria.criteriaStatus, studentCriteria.studentID FROM studentCriteria JOIN studentData ON studentData.studentRoll = studentCriteria.studentID WHERE criteriaStatus = '0' ORDER BY studentCriteria.studentID";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <h1> <b> Criteria Incomplete </b></h1>';
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Student Name</th>  
                         <th>Roll No</th>   
                         <th>Branch</th>
                         <th>Year</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["studentName"].'</td>  
                         <td>'.$row["studentRoll"].'</td> 
                         <td>'.$row["studentBranch"].'</td> 
                         <td>'.$row["studentYear"].'</td> 
                    </tr>
   ';
  }
  $output .= '</table>';
 }



  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=FACES.xls');
  echo $output;
}
?>