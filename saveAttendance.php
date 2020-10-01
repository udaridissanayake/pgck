<?php 
    $IndexNO="13880";
    $Date="9/05/2019";
    $Attendant = $_POST['Attendant'];
    

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentmanagement";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `attendance` (`IndexNO`, `Date`, `Attendant`) VALUES ('$IndexNO','$Date','$Attendant')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    header('Location:studentReg.php');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
    

    echo $IndexNO;
    echo '<br>';
    echo $Date;
    echo '<br>';
    echo $Attendant;
    echo '<br>';
   
?>