<?php 

require("dbconnection.php");

try {

    // $sql = "UPDATE bookmarks
    //         SET podcast=122, text='some text'
    //         WHERE id = 152";

    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    // echo $stmt->rowCount() . " records UPDATED successfully";

        $sql ="SELECT * FROM `student` WHERE classId = 1";   
    
    // use exec() because no results are returned
    //    $conn->exec($sql);
        $dataSet = $conn->prepare($sql);
        $dataSet->execute();
        $result = $dataSet->fetchAll();


        $sql2 ="SELECT * FROM `classes` ";   
    
    // use exec() because no results are returned
    //    $conn->exec($sql);
        $dataSet2 = $conn->prepare($sql2);
        $dataSet2->execute();
        $classes = $dataSet2->fetchAll();
        
}

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pushpadana Girls' College Kandy </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    .centertext {
        text-align: center;
        color: blueviolet;

    }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('leftPage.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('topNav.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Cleaning Chart</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Options</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                
                            <label >Year</label>
                            <select name="" id="">
                                <option value="id">2019</option>
                                <option value="id">2020</option>
                                <option value="id">2021</option>
                                <option value="id">2022</option>
                            </select>
                            <label >Grade</label>
                            <select name="" id="classId">
                                <?php foreach($classes as $class){ ?>
                                <option value="<?php echo $class['ID '] ?>"><?php echo $class['Class_Name'] ?></option>
                                <?php } ?>
                                <!-- <option value="id">12 sci B</option>
                                <option value="id">12 sci C</option>
                                <option value="id">12 sci D</option>
                                <option value="id">12 sci E</option> -->
                            </select>
                            <br>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Cleaning Day</th>
                                </tr>
                                <?php
                                foreach($result as $res){
                                ?>  
                                <tr>
                                    <td>
                                    <?php echo $res['Name'];?>
                                        <input type="hidden" name="StudentID" value="<?php echo $res['StudentID'] ?>">
                                    </td>
                                    <td><select name="" >
                                        <option value="id">Monday</option>
                                        <option value="id">Tuesday</option>
                                        <option value="id">Wednesday</option>
                                        <option value="id">Thursday</option>
                                        <option value="id">Friday</option>
                                    </select></td>
                                </tr>   
                            <?php }
                                ?>
                            </table>
    <button type="submit" class="btn btn-secondary btn-lg">Save</button>
    <?php include('footer.php') ?>
<script>    

</script>