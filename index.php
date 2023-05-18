<?php 
			
	   $dbhost = 'localhost';                // db host
	   $dbuser = 'id20595675_iot';            // my sql user name
	   $dbpass = '}?n_8_ObDQ=rp>SX';            // db password
	   $dbname = "id20595675_project";
	   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} else {
	/*	echo "Database Connection Successful ";		*/
	}
	
     $sql = "SELECT *  FROM Water WHERE id = (SELECT MAX(id) FROM Water)";
   $result = $conn->query($sql);
	

	
	
			
?>


<!DOCTYPE html>


<html>
	<head>
		<meta http-equiv="refresh" content="10">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<br>
		<h1 align="center" style="margin:0 auto;">IOT BASED SMART WATER PURIFIER</h1>
		<br><br>
		 <style>
   
   body
   {  
    /* background-image: url("pic.png"); */

  /* Full height */
  height: 50%;
  background-size: 80 80px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
 
    background-repeat: no-repeat;
    background-position: center;
    margin-bottom: 100px;
    background-color:#e1e8f0;
  
    
   }
   
   .fcc-btn {
  background-color: #199319;
  color: white;
  padding: 15px 25px;
  text-decoration: none;
  cursor: pointer;
  margin-top:500px;
  border: none;
}
  
h1 
{
    text-align: center;
color: RED;
}

h2
{
 text-align: center;
 padding-top: 80;
  color: Green;

}

h3 
{
    text-align: center;
color: Green;

 padding-top: 80;    

} 
p
{
 color:blueviolet;
}
}
</style>

	
	</head>

	<body>
	
		<div id="chart_div" style="width: 80; height: 80; align:center; padding-left:600px; margin:0;"></div>
		
		<title>Water Purifier</title>
		
		
	
		<?php
	
				if ($result->num_rows > 0)
         {
            
            while($row = $result->fetch_assoc()) 
            {
        	
				
				 $hb = $row["PH"];
				 $spo2 = $row["TDS"];
				  
                 
           
           echo "<h2> TDS:                      {$row['TDS']} </h2> ";
				 
				 
			
			}
         }
			
		?>
<center><h3>Designed By: </h3></center>
<center><a target="_blank" class="fcc-btn" href="display.php">Explore Database</a></center>
</body>

</html>   

	
<script type="text/javascript">
	
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);
      
      var ph_val = '<?php echo $hb; ?>'; 
      
      console.log(ph_val);

    
      

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['PH VALUE', parseInt(ph_val) ],
         
        ]);

        var options = {
          width: 900, height: 320,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

	
        
      }

</script>

