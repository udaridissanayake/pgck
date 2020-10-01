<?php
require 'connection.php';
//data 
$ID=$_POST['ID'];
$StudentID=$_POST['StudentID'];
$Subject=$_POST['Subject'];
$Marks=$_POST['Marks'];
$Type=$_POST['Type'];

if(isset($_POST['save'])){
    try{
  
    $sql="INSERT INTO marks(ID,StudentID,Subject,Marks,Type)
    VALUES('$ID','$StudentID','$Subject','$Marks','$Type')";
    //use exec() because no results are returned
    $conn->exec($sql);
    
    echo"new record created successfully";
    header('Location:marks.php');
    }
catch(PDOExcepyion $e)
    {
    echo $sql."<br>",$e->getMessege();
    }
}else{
    try{
   
        $sqlUpdate=" UPDATE marks SET StudentID='$StudentID',Subject='$Subject',Marks='$Marks'Where ID='$ID'";
      
      
        //use exec() because no results are returned
        $conn->exec($sqlUpdate);
        echo"new record Updated successfully";
        header('Location:marks.php');
        }

      catch(PDOExcepyion $e)
        {
        echo $sql."<br>",$e->getMessege();
        }
}

$conn=null;
?>