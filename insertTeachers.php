<?php
require 'connection.php';
//data 
$ID=$_POST['ID'];
$Name=$_POST['Name'];
$Classes=$_POST['Classes'];
$Subject=$_POST['Subject'];


if(isset($_POST['save'])){
    try{
  
    $sql="INSERT INTO teachers(ID,Name,Classes,Subject)
    VALUES('$ID','$Name','$Classes','$Subject')";
    //use exec() because no results are returned
    $conn->exec($sql);
    
    echo"new record created successfully";
    header('Location:teachers.php');
    }
catch(PDOExcepyion $e)
    {
    echo $sql."<br>",$e->getMessege();
    }
}else{
    try{
   
        $sqlUpdate=" UPDATE teachers SET Classes = '$Classes', Name = '$Name',Subject='$Subject' Where  ID='$ID'";
      
      
        //use exec() because no results are returned
        $conn->exec($sqlUpdate);
        echo"new record Updated successfully";
        header('Location:teachers.php');
        }

      catch(PDOExcepyion $e)
        {
        echo $sql."<br>",$e->getMessege();
        }
}

$conn=null;
?>