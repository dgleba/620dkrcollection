<?php
  //TO WRITE TO LOG FILES UNCOMMENT ALL fwrite AND fopen, JGLEBA, 071222
  
  // Write the raw POST data to a file.
  $fn = "log.txt";
  $fp = fopen($fn, "a");
  $rawPostData = file_get_contents('php://input');
  fwrite($fp, date("l F d, Y, h:i A") . "," . $rawPostData . "\n");
  fclose($fp);

  // Store the POST variables.
  $readerName = stripslashes($_POST['reader_name']);
  $macAddress = stripslashes($_POST['mac_address']);
  $lineEnding = $_POST['line_ending'];
  $fieldDelim = $_POST['field_delim'];
  $fieldNames = $_POST['field_names'];
  $fieldValues = stripslashes($_POST['field_values']);

  // Write POST variables to file.
  $fn1 = "postVariables.txt";
  $fp1 = fopen($fn1, "a");
  fwrite($fp1, $readerName . "\n");
  fwrite($fp1, $macAddress . "\n");
  fwrite($fp1, $fieldNames . "\n");
  fwrite($fp1, $fieldValues . "\n");
  fclose($fp1);

  
  
  //Variables for connecting to your database.  These need to be changed before deploying.
  $hostname = "dbm";
  $username = "user";
  $dbname = "dkrdbm";
  $password = "pw34";
  $usertable = "dataa1";
  
  //Connecting to your database
  $con = mysqli_connect($hostname, $username, $password) OR DIE ("Unable to
  connect to database! Please try again later.");
  mysqli_select_db($con,$dbname);
  


  // Start/stop scanning section..

  // read start/stop setting from db.
  $result = mysqli_query($con,"select enablescanner from binscannersettings where id= 1");
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo "setng: " . $row["enablescanner"]. "<br>";
          $venablescanner = $row["enablescanner"];
      }
    } else {
      echo "0 results";
  }
  echo "\n enablscan-set:" . $venablescanner;
     

  echo $readerName;
  
  // don't initialize the var. it is in the database
  // $venabledscanner001 = 1;
  if ( $readerName == "start-bin-scanner") {
      echo 'Start writing posts to dB.';
      // change setting to one.
      if (mysqli_query($con, "update binscannersettings set enablescanner=1 where id=1")) {
        echo "setting changed to 1";
      } else {
        echo "Error changing setting to 1: " . mysqli_error($conn);
      }        
      $venablescanner = 1;

      // increment a number to assign this bin scann start/stop session.
      mysqli_query($con,"insert into capturegroup (id) values (null)");
      $capgroup = mysqli_insert_id($con);
      echo '\n capgroup:'. $capgroup;

    }
  if ($readerName == "stop-bin-scanner") {
        echo 'STOP writing posts to dB.';
      // change setting to 0.
      if (mysqli_query($con, "update binscannersettings set enablescanner=0 where id=1")) {
        echo "setting changed to 0";
      } else {
        echo "Error changing setting to 0: " . mysqli_error($conn);
      }        
      $venablescanner = 0;
    }

  // read the capturegroup number
  $result = mysqli_query($con,"select max(id) as capgrp from  capturegroup");
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo "capgrp: " . $row["capgrp"]. "<br>";
          $capgrp = $row["capgrp"];
      }
    } else {
      echo "0 results";
  }
  //echo "\n capgrp:" . $capgrp;    


  // Replace the field delimiter with a comma.
  $fieldValues1=str_replace($fieldDelim, ",", $fieldValues);

  //Write POST variables to file after changing delimiter.
  $fn3 = "postVariables_commadelimiter.txt";
  $fp3 = fopen($fn3, "a");
  fwrite($fp3, $readerName . "\n");
  fwrite($fp3, $macAddress . "\n");
  fwrite($fp3, $fieldNames . "\n");
  fwrite($fp3, $fieldValues1 . "\n");
  fclose($fp3);

  // Break the field values up into rows.
  $rows = explode("\n", trim($fieldValues1));


  // Remove the last row. It's always blank
  //if (sizeof($rows)) array_pop($rows);

  //  $fieldNames = "reader_name,mac_address," . $fieldNames;
  $fieldNames = "reader_name,mac_address,Antenna,epc,first_seen_timestamp,Usermem,user_mem_string,capture_group";
  //$fieldNames = "reader_name,mac_address,Antenna,epc,first_seen_timestamp,Usermem";

  //Write Field Names to a file.
  $fn5 = "fieldNames_new.txt";
  $fp5 = fopen($fn5, "a");
  fwrite($fp5, $fieldNames . "\n");
  fclose($fp5);

  //Place POST data into the database with SQL statements.
  foreach ($rows as $row)
  {
	$rowarray=explode(',', $row);
	$usermem02=$rowarray[3];
	$usermem01=str_replace('"', '', $usermem02);
	print (" , " .$usermem01. " , ". "\n" );
	echo hex2bin( $usermem01);
	$usermem_as_string = hex2bin($usermem01);
	$usermem_as_string = 'a';
	print (" , " .$usermem_as_string." , ". "\n". "\n" ) ;
  $row = $readerName . "," . $macAddress . "," . trim($row).  "," . '"' . $usermem_as_string .'"'. "," . $capgrp ;
	//



  if ($venablescanner == 1) {
      $query = ("INSERT IGNORE  INTO $usertable ($fieldNames) VALUES ($row)");
      echo " : " . $query . "\n";
      mysqli_query($con,$query);
    }  

  //Write SQL query statements to file.
  $fn6 = "query.txt";
  $fp6 = fopen($fn6, "a");
  fwrite($fp6, $query . "\n");
  fclose($fp6);
  }

  mysqli_close($con);
?>


