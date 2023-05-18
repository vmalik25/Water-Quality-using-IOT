<?php

       $temp_s1 =  $_GET['PH'];
	   $temp_s2 =  $_GET['TDS'];
	   $command = escapeshellcmd("python pythonFile.py $temp_s1 $temp_s2");
	   $output=shell_exec($command);
	   
	   if($output=='0')
	   {
	     $to = "rishabhmajithiya09@gmail.com,majithiya.ug20@nsut.ac.in";
         $subject = "Water Purifier- TDS Level Exceed!!!";
         
         $message = '
                    <html>
                    <body>
                    <p>Dear User<b></p>
                    <p>TDS Level has been Exceeded. Please get your RO checked ASAP.  <b></p>
                    
                    <p>Thanks & Regards<b></hp>
                    <p>Smart Water Purifier Team<b></p>
                    </body>
                    </html>';

         $header = "From:rishabhmajithiya09@gmail.com \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         //$header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) 
         {
            echo "Email sent successfully...";
         }else {
            echo "Email  not sent...";
         }
            
	   }
	   
       $dbhost = 'localhost';                // db host
	   $dbuser = 'id20595675_iot';            // my sql user name
	   $dbpass = '}?n_8_ObDQ=rp>SX';            // db password
	   $dbname = "id20595675_project";
	   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	   
	   if(! $conn )
	    {
		  die('<br>Could not connect: <br>' . mysqli_connect_error());
	    }
	   //echo '<br>Database Connected successfully</br>';
	    date_default_timezone_set("Asia/kolkata"); 
	   $d1=date("Y-m-d h:i:s");
	         $sql = "INSERT INTO Water (PH,TDS,Updated_ON)   VALUES ('$temp_s1', '$temp_s2','$d1')";
			
			          if ($conn->query($sql) === TRUE) 
			          {
			                  $last_id = $conn->insert_id;
			                  echo "New record created successfully. Last inserted ID is: " . $last_id;
				}
				 else 
				 
				 {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				 }
				
			
	        
				$conn->close();
				
   
   
 ?>
 
 
 
</body>
</html>