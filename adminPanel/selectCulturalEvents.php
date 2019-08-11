<?php
require "../php/conn.php";
$sql = "SELECT * FROM eventlist WHERE eventType='Cultural'";
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
                     <th width="10%">Event Capacity</th> 
                     <th width="50%">Event Image</th>
                     <th width="50%">Image Preview</th>
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
                <td><input type="text" name="cultural_limit" value="'.$row["eventCapacity"].'" style="border: none" readonly></td>
    	    	    <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["SrNo"].'">Upload</button></td>
    	    	    <td><img src="data:image/jpeg;base64,'.base64_encode($row['eventImage'] ).'" height="60" width="75"/></td>
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
                    <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["SrNo"].'">Upload</button></td>
    	    	    <td><img src="data:image/jpeg;base64,'.base64_encode($row['eventImage'] ).'" height="60" width="75"/></td>
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
              <td><input type="text" name="cultural_limit" style="border: none"></td>
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
              <td><input type="text" name="cultural_limit" style="border: none"></td>
              <td></td>
              <td></td>
              <td><input type="submit" name="btn_add" id="btn_add" class="btn btn-xs btn-success" value="+"></td>
			</tr>
		</form>';  
}  
$output .= '</table></div>';
$output .= '
 <div id="imageModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Add Image</h4>
    </div>
    <div class="modal-body">
     <form id="image_form" method="post" enctype="multipart/form-data">
      <p><label>Select Image</label>
      <input type="file" name="image" id="image" /></p><br />
      <input type="hidden" name="action" id="action" value="insert" />
      <input type="hidden" name="image_id" id="image_id" />
      <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
     </form>
    </div>
    <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </div>
  </div>
 </div>';
echo $output;
?>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/plugins/pace.min.js"></script>

<script type="text/javascript">
	// $(document).ready(function(){  
	   	$(".update").click(function(){
    	    $('#image_id').val($(this).attr("id"));
        	$('#action').val("update");
	        $('.modal-title').text("Update Image");
    	    $('#insert').val("Update");
        	$('#imageModal').modal("show");
		});
	   	$('#image_form').submit(function(event) {
    	    event.preventDefault();
        	var image_name = $('#image').val();
	        if(image_name == '') {
    	        alert("Please Select Image");
        	    return false;
	        } else {
		        var extension = $('#image').val().split('.').pop().toLowerCase();
    		    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1) {
        		    alert("Invalid Image File");
            		$('#image').val('');
		            return false;
    		    } else {
        		    $.ajax({
            		    url:"upload.php",
                		method:"POST",
	                	data:new FormData(this),
	 		            contentType:false,
    	 		        processData:false,
        	 		    success:function(data) {
		    	    	    alert(data);
        			    	fetch_data();
			        	    $('#image_form')[0].reset();
    	    		    	$('#imageModal').modal('hide');
	           			}
		        	});
        		}
	   		}
 		});
    // });
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