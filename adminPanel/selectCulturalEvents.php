<?php
require "../php/conn.php";
$sql = "SELECT * FROM culturaleventlist";
$output = '';
$result = mysqli_query($conn, $sql);

$output .= '<button id="EDIT" onclick="clickEdit()">EDIT</button> <button id="Cancel" onclick="clickCancel()">Done</button>
            <br><br>';

$output .= '
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="10%">Sr. No</th>
                <th width="20%">Event Name</th>
                <th width="15%">Event Date</th>
				<th width="15%">Event Time</th>
                <th width="30%">Event Description</th>
                <th width="10%">Delete</th>
                </tr>';
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {  
    	$output .= '
    		<form action="deleteCultural.php" method="POST">
	        	<tr class="deleteThis">  
    	        	<td><input type="text" size="3" value="'.$row["SrNo"].'" name="id" style="border: none" readonly></td>  
	        	    <td><input type="text" value="'.$row["eventName"].'" style="border: none" id="col1" readonly></td>
    	        	<td><input type="text" size="10" value="'.$row["eventDate"].'" style="border: none" id="col2" readonly></td>
	    	        <td><input type="text" size="10" value="'.$row["eventTime"].'" style="border: none" id="col3" readonly></td>
    	    	    <td><input type="text" value="'.$row["eventDescription"].'" style="border: none" id="col4" readonly></td>
    	            <td><input type="submit" name="delete_btn" data-id5="'.$row["SrNo"].'" class="btn btn-xs btn-danger btn_delete" value="x"></td>
                </tr>  
            </form>
            <form action="editCultural.php" method="POST">
                <tr class="editThis">  
                    <td><input type="text" size="3" value="'.$row["SrNo"].'" name="id" style="border: none"></td>  
                    <td><input type="text" name="cultural_name" value="'.$row["eventName"].'" style="border: none" id="col1"></td>
                    <td><input type="text" size="10" name="cultural_date" value="'.$row["eventDate"].'" style="border: none" id="col2"></td>
                    <td><input type="text" size="10" name="cultural_time" value="'.$row["eventTime"].'" style="border: none" id="col3"></td>
                    <td><input type="text" name="cultural_desc" value="'.$row["eventDescription"].'" style="border: none" id="col4"></td>
                    <td><input type="submit" name="delete_btn" data-id5="'.$row["SrNo"].'" class="btn btn-xs btn-danger btn_delete" value="Save"></td>
                </tr>  
            </form>';  
    }  
    $output .= '
    	<form action="insertCultural.php" method="POST">
	    	<tr class="deleteThis">
    	    	<td></td>  
        	    <td><input type="text" name="cultural_name" style="border: none"></td>
            	<td><input type="text" name="cultural_date" style="border: none"></td>
	            <td><input type="text" name="cultural_time" style="border: none"></td>
    	        <td><input type="text" name="cultural_desc" style="border: none"></td>
        	    <td><input type="submit" name="btn_add" id="btn_add" class="btn btn-xs btn-success" value="+"></td>
	        </tr>
        </form>
      ';  
} else {  
    $output .= '
      	<form action="insertCultural.php" method="POST">
      		<tr class="deleteThis">
                <td></td>  
        	    <td><input type="text" name="cultural_name" style="border: none"></td>
            	<td><input type="text" name="cultural_date" style="border: none"></td>
	            <td><input type="text" name="cultural_time" style="border: none"></td>
    	        <td><input type="text" name="cultural_desc" style="border: none"></td>
                <td><input type="submit" name="btn_add" id="btn_add" class="btn btn-xs btn-success" value="+"></td>
			</tr>
		</form>';  
}  
$output .= '</table></div>';
echo $output;
?>

<script type="text/javascript">
    document.getElementById('Cancel').style.visibility = "hidden";
    var editlist = document.getElementsByClassName('editThis');
    for(i=0;i<editlist.length;i++) {
        editlist[i].style.display="none";
    }
    var deletelist = document.getElementsByClassName('deleteThis');
    function clickEdit() {
        document.getElementById('Cancel').style.visibility = "visible";
        for(i=0;i<deletelist.length;i++) {
            deletelist[i].style.display = "none";
        }
        for(i=0;i<deletelist.length;i++) {
            editlist[i].style.removeProperty('display');
        }
    }
    function clickCancel() {
        location.reload();
    }
</script>