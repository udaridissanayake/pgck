<?php
    $IndexNO=$_POST['IndexNO'];
    $Name=$_POST['Name'];
    $Gardian_name=$_POST['Gardian_name'];
    $Address=$_POST['Address'];
    $District=$_POST['District'];
    $City=$_POST['City'];
    $BOD=$_POST['BOD'];
    $Subject=$_POST['Subject'];
    $Email=$_POST['Email'];
    $PhoneNo=$_POST['PhoneNo'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentmanagement";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO student(`IndexNO`,`Name`,`Gardian_name`,`Address`,`District`,`City`,`BOD`, `Subject`,`Email`,`PhoneNO`) 
   VALUES ('$IndexNO','$Name','$Gardian_name','$Address','$District','$City','$BOD','$Subject','$Email','$PhoneNO')";
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
    echo $Name;
    echo '<br>';
    echo $Gardian_name;
    echo '<br>';
    echo $Address;
    echo '<br>';
    echo $District;
    echo '<br>';
    echo $City;
    echo '<br>';
    echo $BOD;
    echo '<br>';
    echo $Subject;
    echo '<br>';
    echo $Email;
    echo '<br>';
    echo $PhoneNO;
    echo '<br>';
?>  