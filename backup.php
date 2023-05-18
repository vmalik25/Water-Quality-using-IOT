<?php

        $dbhost = 'localhost';                // db host
	   $dbuser = 'id20595675_iot';            // my sql user name
	   $dbpass = '}?n_8_ObDQ=rp>SX';            // db password
	   $dbname = "id20595675_project";
	   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
		$query = "SELECT * FROM Water";
		if (!$result = mysqli_query($conn, $query)) {
		    exit(mysqli_error($con));
		}
		 
		$users = array();
		if (mysqli_num_rows($result) > 0) {
		    while ($row = mysqli_fetch_assoc($result)) {
		        $users[] = $row;
		    }
		}
		 
		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Disposition: attachment; filename=Water.csv');
		$output = fopen('php://output', 'w');
		fputcsv($output, array('ID', 'PH','TDS','UPDATED TIME'));
		 
		if (count($users) > 0) {
		    foreach ($users as $row) {
		        fputcsv($output, $row);
		    }
		}
?>