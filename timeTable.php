<?php 

require("dbconnection.php");

try {

    // $sql = "UPDATE bookmarks
    //         SET podcast=122, text='some text'
    //         WHERE id = 152";

    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    // echo $stmt->rowCount() . " records UPDATED successfully";

        $sql ="select * from student";   
    
    // use exec() because no results are returned
    //    $conn->exec($sql);
        $dataSet = $conn->prepare($sql);
        $dataSet->execute();
        $result = $dataSet->fetchAll();

        
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
        <?php
    include('leftPage.php')
    ?>
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
                    <h1 class="h3 mb-4 text-gray-800">Time Table</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Options</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                
                                    <tr>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                    </tr>
                                    <tr>
                                        <td>Physics</td>
                                        <td>English</td>
                                        <td>Chem/IT</td>
                                        <td>Physics</td>
                                        <td>Chem/IT</td>
                                    </tr>
                                    <tr>
                                        <td>Physics</td>
                                        <td>English</td>
                                        <td>Chem/IT</td>
                                        <td>Physics</td>
                                        <td>Chem/IT</td>
                                    </tr>
                                    <tr>
                                        <td>English</td>
                                        <td>Bio/Maths</td>
                                        <td>Physics</td>
                                        <td>Chem/IT</td>
                                        <td>Physics</td>
                                    </tr>
                                        
                                    <tr>
                                        <td>English</td>
                                        <td>Bio/Maths</td>
                                        <td>Physics</td>
                                        <td>Chem/IT</td>
                                        <td>Physics</td>
                                    </tr>
                                    <tr>
                                        <th colspan="5"><center><b>INTERVAL</b></center></th>
                                    </tr>
                                    <tr>
                                        <td>Chem/IT</td>
                                        <td>Physics</td>
                                        <td>Bio/Maths</td>
                                        <td>Bio/Maths</td>
                                        <td>Bio/Maths</td>
                                    </tr>
                                    <tr>
                                        <td>Chem/IT</td>
                                        <td>Physics</td>
                                        <td>Bio/Maths</td>
                                        <td>Bio/Maths</td>
                                        <td>Bio/Maths</td>
                                    </tr>
                                    <tr>
                                        <td>Bio/Maths</td>
                                        <td>Chem/IT</td>
                                        <td>GIT</td>
                                        <td>P/L</td>
                                        <td>English</td>
                                    </tr>
                                    <tr>
                                        <td>Bio/Maths</td>
                                        <td>Chem/IT</td>
                                        <td>GIT</td>
                                        <td>P/L</td>
                                        <td>English</td>
                                    </tr>
                                    <tr>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                    </tr>



                                    