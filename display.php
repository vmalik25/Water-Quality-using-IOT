<!DOCTYPE html>
<html>
<head>
 <title>Database Records</title>
 <style>
 
 body 
 {
 
}
 .button {
    
    
   
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
/* changes */
.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid black;
}

.button1:hover {
    background-color: black;
    color: white;
}



 h1
 {
 color:red;
 }
 body
 {
 background-color:white;
 }
  table 
  {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-size: 25px;
   text-align: center;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
 
  tr:nth-child(even) {background-color: #f2f2f2}
  
 </style>
</head>
<body>
<center><h1> Smart Water Purifier </h1></center>
 <table>
 <tr>
  <th>ID</th> 
   <th>PH </th> 
   <th>TDS</th>
   <th>UPDATED TIME</th>
   
 </tr>
 <?php
     $dbhost = 'localhost';                // db host
	   $dbuser = 'id20595675_iot';            // my sql user name
	   $dbpass = '}?n_8_ObDQ=rp>SX';            // db password
	   $dbname = "id20595675_project";
	   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT ID,PH,TDS,Updated_ON FROM Water";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) 
   {
    echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["PH"] . "</td><td>" . $row["TDS"]. "</td> <td>" . $row["Updated_ON"]. "</td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<center> <div class="form-group">
        <button onclick="Export()" class="btn btn-primary">Export to CSV File</button>
    </div>
    <!--  /Content   -->

    <script>
        function Export()
        {
            var conf = confirm("Export users to CSV?");
            if(conf == true)
            {
                window.open("backup.php", '_blank');
            }
        }
    </script> </center>
<center><a href="index.php"><button class="button button1">EXIT</button></a></center>

</form>
</body>
</html>