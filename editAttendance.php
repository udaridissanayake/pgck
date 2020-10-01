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
                    <h1 class="h3 mb-4 text-gray-800">Attendance</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Options</h6>
                            <div class="form-group">
                        <label for="Date">Date</label>
                        <input type="date" id="Date" name="Date" aria-describedby="datediscribe"
                         required>
                        <small id="datediscribe" class="form-text text-muted">Date</small>
                    </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                      <tr>
                                        <th>Index</th>
                                        <th>Name</th>
                                        <th>Attendance</th>
                                      </tr>
                                      <tr>
                                        <td>13850</td>
                                        <td>Y.M.U.Yapa Bandara</td>
                                        <td></td>                                       
                                      </tr>
                                      <tr>
                                        <td>13850</td>
                                        <td>S.N.Karunarathna</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                          <td>13868</td>
                                          <td>K.B.N.S.Jayarathna</td>
                                          <td></td>
                                      </tr>
                                      <tr>
                                          <td>13880</td>
                                          <td>D.M.U.K.Dissanayake</td>
                                          <td></td>

                  
</thead>
</table>
</div>
</div>
</div>
                  