<?php
$severname="localhost";
$username="root";
$password="";
$dbname="studentmanagement";
$conn=new PDO("mysql:host=$severname;dbname=$dbname",$username,$password);
//set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>