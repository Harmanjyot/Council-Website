<?php
  require "../php/conn.php";
  session_start();
  if ($_SESSION['userType'] == "teacher") {
    
?>

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
    <title>Teacher</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../adminPanel/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Strength', 'Registered', 'Criteria Fulfilled'],
          <?php
          $branch = "Comps";
          $sql = "select * from branchData where branchName='$branch'";
          $result = mysqli_query($conn, $sql);
          if ($result->num_rows >0)
          {
            while($row = $result->fetch_assoc())
            {
              echo "['".$row["branchYear"]."', ".$row["branchStrength"].", ".$row["branchRegistration"].", ".$row["branchCriteria"]."],";
            }
          }
          ?>

        ]);

        var options = {
          chart: {
            title: 'Registrations Computers'
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_computer'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
        <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Strength', 'Registered', 'Criteria Fulfilled'],
          <?php
          $branch = "Electrical";
          $sql = "select * from branchData where branchName='$branch'";
          $result = mysqli_query($conn, $sql);
          if ($result->num_rows >0)
          {
            while($row = $result->fetch_assoc())
            {
              echo "['".$row["branchYear"]."', ".$row["branchStrength"].", ".$row["branchRegistration"].", ".$row["branchCriteria"]."],";
            }
          }
          ?>

        ]);

        var options = {
          chart: {
            title: 'Registrations Electrical'
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_electrical'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Strength', 'Registered', 'Criteria Fulfilled'],
          <?php
          $branch = "EXTC";
          $sql = "select * from branchData where branchName='$branch'";
          $result = mysqli_query($conn, $sql);
          if ($result->num_rows >0)
          {
            while($row = $result->fetch_assoc())
            {
              echo "['".$row["branchYear"]."', ".$row["branchStrength"].", ".$row["branchRegistration"].", ".$row["branchCriteria"]."],";
            }
          }
          ?>

        ]);

        var options = {
          chart: {
            title: 'Registrations EXTC'
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_extc'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
        <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Strength', 'Registered', 'Criteria Fulfilled'],
          <?php
          $branch = "IT";
          $sql = "select * from branchData where branchName='$branch'";
          $result = mysqli_query($conn, $sql);
          if ($result->num_rows >0)
          {
            while($row = $result->fetch_assoc())
            {
              echo "['".$row["branchYear"]."', ".$row["branchStrength"].", ".$row["branchRegistration"].", ".$row["branchCriteria"]."],";
            }
          }
          ?>

        ]);

        var options = {
          chart: {
            title: 'Registrations IT'
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_it'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    </script>
        <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Strength', 'Registered', 'Criteria Fulfilled'],
          <?php
          $branch = "Mechanical";
          $sql = "select * from branchData where branchName='$branch'";
          $result = mysqli_query($conn, $sql);
          if ($result->num_rows >0)
          {
            while($row = $result->fetch_assoc())
            {
              echo "['".$row["branchYear"]."', ".$row["branchStrength"].", ".$row["branchRegistration"].", ".$row["branchCriteria"]."],";
            }
          }
          ?>

        ]);

        var options = {
          chart: {
            title: 'Registrations Mechanical'
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_mechanical'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

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
        <li><a class="app-menu__item" href="student_General.php"><i class="app-menu__icon fa fas fa-graduation-cap"></i><span class="app-menu__label"> General </span></a>

      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fas fa-line-chart"></i> Dashboard</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body" style="overflow: hidden;">
                <div id="barchart_computer" style="width: 750px; height: 500px;float: left;"></div> 
                <div id="barchart_electrical" style="width: 750px; height: 500px;float: right;"></div>
                <div id="barchart_mechanical" style="width: 750px; height: 500px;float: left;"></div>
                <div id="barchart_extc" style="width: 750px; height: 500px;float: right;"></div>
                <div id="barchart_it" style="width: 750px; height: 500px;float: left;"></div>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="../adminPanel/js/jquery-3.2.1.min.js"></script>
    <script src="../adminPanel/js/popper.min.js"></script>
    <script src="../adminPanel/js/bootstrap.min.js"></script>
    <script src="../adminPanel/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../adminPanel/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
  </body>
</html>

<?php
}
?>