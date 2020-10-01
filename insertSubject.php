<?php
require 'connection.php';
//data 
$ID=$_POST['ID'];
$StudentID=$_POST['StudentID'];
$Subject=$_POST['Subject'];

if(isset($_POST['save'])){
    try{
  
    $sql="INSERT INTO subject(ID,StudentID,Subject)
    VALUES('$ID','$StudentID','$Subject')";
    //use exec() because no results are returned
    $conn->exec($sql);
    
    echo"new record created successfully";
    header('Location:subject.php');
    }
catch(PDOExcepyion $e)
    {
    echo $sql."<br>",$e->getMessege();
    }
}else{
    try{
   
        $sqlUpdate=" UPDATE subject SET StudentID='$StudentID',Subject='$Subject' Where  ID='$ID'";
      
      
        //use exec() because no results are returned
        $conn->exec($sqlUpdate);
        echo"new record Updated successfully";
        header('Location:subject.php');
        }

      catch(PDOExcepyion $e)
        {
        echo $sql."<br>",$e->getMessege();
        }
}

$conn=null;
?>