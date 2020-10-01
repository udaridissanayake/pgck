<?php
$severname="localhost";
$username="root";
$password="";

try{
    $conn=new PDO("mysql:host=$severname;dbname=studentmanagement",$username,$password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"connected successfully";
    $stmt=$conn->prepare("SELECT ID,Student ID,Subject,Marks,Type FROM Marks");
    $stmt->execute();
    }
catch(PDOException$e)
    {
    echo"connection failed:".$e->getMessage();
    }
?>
