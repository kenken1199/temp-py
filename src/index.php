<?php include "db.php";?>
  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Temperature'],
          <?php
	      $query="select * from temperature";
	      $res=mysqli_query($conn,$query);
	      while($data=mysqli_fetch_array($res)){
		$date=$data['date'];
		$temp=$data['value'];
	  ?>
	  ['<?php echo $date; ?>', <?php echo $temp; ?>],
	  <?php
	      }
	  ?>

        ]);

        var options = {
          title: 'My Room Temperature',
          //curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
