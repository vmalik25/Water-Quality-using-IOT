<?php

       $dbhost = 'localhost';                // db host
	   $dbuser = 'id20595675_iot';            // my sql user name
	   $dbpass = '}?n_8_ObDQ=rp>SX';            // db password
	   $dbname = "id20595675_project";
	   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
  // Check connection
          if ($conn->connect_error) 
          {
           die("Connection failed: " . $conn->connect_error);
          } 
          $sql = "truncate table Water";
?>

<form method="post" action="<?php mysqli_query($conn, 'TRUNCATE TABLE `Water`')   ?>">
    <input name="submit_button" type="submit" value=" Truncate Table " />
</form>