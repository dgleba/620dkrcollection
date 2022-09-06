<?php
   // Write the raw POST data to a file.
   // echo file_get_contents('php://input');
   $rawPostData = file_get_contents('php://input');
   echo "\nrawpost: " . $rawPostData ;

   $fn = "log.txt";
   $fp = fopen($fn, "a");
   fwrite($fp, date("Y-m-d h:i:s-A-T") . ", " . $rawPostData . "\n");
   fclose($fp);

   echo "\npostarray: " ;
   print_r ($_POST);

   //  echo $_POST["name"] . "\n";
   //  echo $_POST["email"] . "\n";

   // Store the POST variables.
   //  $readerName = stripslashes($_POST['reader_name']);
   //  $readerName = htmlspecialchars($_POST['reader_name']);
   $readerName = $_POST['reader_name'];

   echo "rdrname: " . "$readerName" . "\n";

    // Write POST variables to file.
   $fn1 = "post2Variables.txt";
   $fp1 = fopen($fn1, "a");
   fwrite($fp1, $readerName . "\n");
   fclose($fp1);

