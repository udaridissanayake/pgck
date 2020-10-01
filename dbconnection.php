<?php 
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "studentmanagement";
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   try {
//       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//       // set the PDO error mode to exception
    
//    //    echo "New record created successfully";
//       }
//   catch(PDOException $e)
//       {
//       echo $sql . "<br>" . $e->getMessage();
//       }
  
//   $conn = null;





//   <?php
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "podcast";

// ?>