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
    <title>Criteria Incomplete</title>
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
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fas fa-graduation-cap"></i><span class="app-menu__label"> Student Details</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="registeredStudents.php"><i class="icon fa fa-circle-o"></i> Registered </a></li>
            <li><a class="treeview-item" href="criteria_Full.php"><i class="icon fa fa-circle-o"></i> Criteria Fulfilled </a></li>
            <li><a class="treeview-item" href="criteria_Incomplete.php"><i class="icon fa fa-circle-o"></i> Criteria Incomplete</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="eventsRegistered.php"><i class="app-menu__icon fa fas fa-line-chart"></i><span class="app-menu__label"> Event Registrations</span></a></li>
                <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fas fa-graduation-cap"></i><span class="app-menu__label"> Branch Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="student_General.php"><i class="icon fa fa-circle-o"></i> General </a></li>
            <li><a class="treeview-item" href="branchScore.php"><i class="icon fa fa-circle-o"></i> Score </a></li>
          </ul>
        </li>

        <li><a class="app-menu__item" href="sponsor_data.php"><i class="app-menu__icon fa fas fa-graduation-cap"></i><span class="app-menu__label"> Sponsor Data</span></a>
        </li>
        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fas fa-sitemap"></i><span class="app-menu__label"> Student  Council</span></a>
        </li>
        <li><a class="app-menu__item" href="toExcel.php"><i class="app-menu__icon fa fas fa-sitemap"></i><span class="app-menu__label"> EXPORT </span></a>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>Student Criteria Incomplete</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="container box">

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
                url:"selectCriteriaIncom.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  

 });  

 </script>

  </body>
</html>
