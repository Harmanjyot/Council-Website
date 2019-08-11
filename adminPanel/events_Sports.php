
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">





    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html"></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <ul class="app-menu">
        <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fas fa-line-chart"></i><span class="app-menu__label"> Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label"> Events</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="events_Cultural.php"><i class="icon fa fa-circle-o"></i> Cultural</a></li>
            <li><a class="treeview-item" href="events_Sports.php"><i class="icon fa fa-circle-o"></i> Sports</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Technical</a></li>
          </ul>
        </li>

        <li><a class="app-menu__item" href="studentDetails.php"><i class="app-menu__icon fa fas fa-graduation-cap"></i><span class="app-menu__label"> Student  Details</span></a>
        </li>
        <li><a class="app-menu__item" href="registrations.php"><i class="app-menu__icon fa fas fa-graduation-cap"></i><span class="app-menu__label"> Registrations</span></a>
        </li>
        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fas fa-sitemap"></i><span class="app-menu__label"> Student  Council</span></a>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1> Sports Events</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="container box">
                 <h1 align="center">Add New Sport Events</h1>
                 <br />
                 <div class="table-responsive">
                    <div id = "live_data"></div>
                 </div>
              </div>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>

            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->

    <script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var sport_name = $('#sport_name').text();  
           var sport_date = $('#sport_date').text();  
           var sport_time = $('#sport_time').text(); 
           var sport_desc = $('#sport_desc').text(); 
           var sport_limit = $('#sport_limit').text();
           var eventType = "Sports";
           if(sport_name == '')  
           {  
                alert("Enter sport_name");  
                return false;  
           }  
           if(sport_date == '')  
           {  
                alert("Enter sport_date");  
                return false;  
           } 
           if(sport_time == '')  
           {  
                alert("Enter sport_time");  
                return false;  
           }  
           if(sport_desc == '')  
           {  
                alert("Enter sport_desc");  
                return false;  
           }  
           if(sport_limit == '')  
           {  
                alert("Enter sport_limit");  
                return false;  
           }
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{sport_name:sport_name, sport_desc:sport_desc, sport_time:sport_time, sport_date:sport_date, eventType:eventType, sport_limit:sport_limit},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  

       $(document).on('click', '.update', function(){
        $('#image_id').val($(this).attr("id"));
        $('#action').val("update");
        $('.modal-title').text("Update Image");
        $('#insert').val("Update");
        $('#imageModal').modal("show");
       });
      //     $(document).on('click', '#uploadImage', function(){  
      //      var sport_name = $('#sport_name').text();  
           
      //      $.ajax({  
      //           url:"upload.php",  
      //           method:"POST",  
      //           data:{sport_name: sport_name, filename:filename},  
      //           dataType:"text",  
      //           success:function(data)  
      //           {  
      //                alert(data);  
      //                fetch_data();  
      //           }  
      //      })  
      // }); 
       $('#image_form').submit(function(event){
        event.preventDefault();
        var image_name = $('#image').val();
        if(image_name == '')
        {
         alert("Please Select Image");
         return false;
        }
        else
        {
         var extension = $('#image').val().split('.').pop().toLowerCase();
         if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
         {
          alert("Invalid Image File");
          $('#image').val('');
          return false;
         }
         else
         {
          $.ajax({
           url:"upload.php",
           method:"POST",
           data:new FormData(this),
           contentType:false,
           processData:false,
           success:function(data)
           {
            alert(data);
            fetch_data();
            $('#image_form')[0].reset();
            $('#imageModal').modal('hide');
           }
          });
         }
        }
       });


      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                     fetch_data();
                }  
           });  
      }  
      $(document).on('blur', '.sport_name', function(){  
           var id = $(this).data("id1");  
           var sport_name = $(this).text();  
           edit_data(id, sport_name, "eventName");  
      });  
      $(document).on('blur', '.sport_desc', function(){  
           var id = $(this).data("id4");  
           var sport_desc = $(this).text();  
           edit_data(id,sport_desc, "eventDescription");  
      });  
      $(document).on('blur', '.sport_time', function(){  
           var id = $(this).data("id3");  
           var sport_time = $(this).text();  
           edit_data(id, sport_time, "eventTime");  
      });  
      $(document).on('blur', '.sport_date', function(){  
           var id = $(this).data("id2");  
           var sport_date = $(this).text();  
           edit_data(id,sport_date, "eventDate");  
      });   
      $(document).on('blur', '.sport_limit', function(){  
           var id = $(this).data("id6");  
           var sport_limit = $(this).text();  
           edit_data(id, sport_limit, "eventCapacity");  
      }); 
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id5");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>

  </body>
</html>

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
 </div>