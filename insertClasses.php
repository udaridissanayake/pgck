<?php
require 'connection.php';
//data 
$ID=$_POST['ID'];
$Class_Name=$_POST['Class_Name'];
$Student_Limit=$_POST['Student_Limit'];

if(isset($_POST['save'])){
    try{
  
    $sql="INSERT INTO classes(ID,Class_Name,Student_Limit)
    VALUES('$ID','$Class_Name','$Student_Limit')";
    //use exec() because no results are returned
    $conn->exec($sql);
    
    echo"new record created successfully";
    header('Location:classes.php');
    }
catch(PDOExcepyion $e)
    {
    echo $sql."<br>",$e->getMessege();
    }
}else{
    try{
   
        $sqlUpdate=" UPDATE classes SET Class_Name='$Class_Name',Student_Limit='$Student_Limit' Where  ID='$ID'";
      
      
        //use exec() because no results are returned
        $conn->exec($sqlUpdate);
        echo"new record Updated successfully";
        header('Location:classes.php');
        }

      catch(PDOExcepyion $e)
        {
        echo $sql."<br>",$e->getMessege();
        }
}

$conn=null;
?>