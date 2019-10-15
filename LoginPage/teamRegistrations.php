<?php
require "../php/conn.php";
session_start();
$event_id = $_GET["event"];
$capRoll = $_SESSION["userRoll"];
$userID = $_SESSION["userId"];
$query = "SELECT * FROM eventList WHERE eventName = '$event_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$eveID = $row["SrNo"];
$team_Capacity = $row["teamCapacity"];
$eveCapacity = $row["eventCapacity"];
$query = "SELECT * FROM studentData WHERE studentRoll = '$capRoll'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$branch = $row["studentBranch"];

$query = "SELECT eventRegistrations.eventID, eventRegistrations.studentRoll, studentData.studentBranch, studentData.studentRoll FROM eventRegistrations JOIN studentData ON eventRegistrations.studentRoll = studentData.studentRoll WHERE eventRegistrations.studentRoll='$capRoll' and eventRegistrations.eventID='$eveID' AND studentData.studentBranch = '$branch'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
	echo "Already Registered";
	exit();
}
else
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Team Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<span class="login100-form-title">
						Team Registration
					</span>
				<div class="table-responsive">
                    <div id = "live_data"></div>
                 </div>
					<a class="btn login100-form-btn" href="../LoginPage/myEvents.php">Done</a>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<?php
}
?>

    <script>  
  
 $(document).ready(function(){  
      function fetch_data()  
      {  var event_id = <?php echo $eveID ?> ;
      	 var branch = "<?php echo $branch ?>" ;
      	 var capRoll = <?php echo $capRoll ?> ;
           $.ajax({  
                url:"selectTeam.php",  
                method:"POST",  
                data: {event_id:event_id, branch:branch, capRoll:capRoll},
                success:function(data){ 
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var userroll = $('#roll_no').text();
           var player_name = $('#player_name').text();
           var player_year = $('#player_year').text();
           var event_name = "<?php echo $event_id ?>" ;
           var capRoll = <?php echo $capRoll ?> ;
           var userid = <?php echo $userID ?> ;
           if(userroll == '')  
           {  
                alert("Enter Roll No");  
                return false;  
           }  
           if(player_year == '')  
           {  
                alert("Enter Year");  
                return false;  
           } 
           if(player_name == '')  
           {  
                alert("Enter Name");  
                return false;  
           }  
          
         
           $.ajax({  
                url:"selectTeamReg.php",  
                method:"POST",  
                data:{ player_name:player_name, player_year:player_year, userroll:userroll, event_name:event_name, capRoll:capRoll, userid:userid},  
                dataType:"text",  
                success:function(data)  
                {  
                     fetch_data();  
                }  
           })  
      });  

 });  

  

 </script>
