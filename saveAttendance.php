<?php 
    $Date= $_POST['selectedDate'];
    $grade = $_POST['selectedGrade'];
    $IndexNO = $_POST['indexNo'];
    $Attendant = 1;

    
try {
    require("dbconnection.php");

    $sql = "INSERT INTO `attendance` (`IndexNO`, `Date`, `Attendant`) VALUES ('$IndexNO','$Date','$Attendant')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    // header('Location:studentReg.php');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
    

    // echo $IndexNO;
    // echo '<br>';
    // echo $Date;
    // echo '<br>';
    // echo $Attendant;
    // echo '<br>';
   
?>