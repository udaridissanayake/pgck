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

  <title>P.G.C.K</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
          <h1 class="h3 mb-4 text-gray-800">Register Student</h1>

          <form action="action_page.php" method="POST">
                <div class="container">
                    <!-- <h1 class="centertext">STUDENT REGISTRATION FORM</h1> -->
                 
                    <hr>
                    <div class="form-group">
                        <label for="IndexNO">IndexNO</label>
                        <input type="text" class="form-control" id="IndexNO" name="IndexNO"
                            aria-describedby="IndexNOiscribe" placeholder="Enter IndexNO" required>
                        <small id="IndexNOdiscribe" class="form-text text-muted">IndexNO</small>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="namediscribe"
                            placeholder="Enter Name" required>
                        <small id="namediscribe" class="form-text text-muted">Student Name</small>
                    </div>
                    <div class="form-group">
                        <label for="gardian name">Gardian name</label>
                        <input type="text" class="form-control" id="gardian_name" name="gardian name"
                            aria-describedby="gardiannamediscribe" placeholder="Enter gardian name" required>
                        <small id="gardian namediscribe" class="form-text text-muted">Gardian name</small>
                    </div>
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" id="Address" name="Address" aria-describedby="Addressdiscribe"
                            placeholder="Enter Address" required>
                        <small id="Addressdiscribe" class="form-text text-muted">Address</small>
                    </div>
        
                   
                    <div class="form-group">
                        <label for="Distric">Distric</label>
                        <input type="text" class="form-control" id="Distric" name="Distric" aria-describedby="Districdiscribe"
                            placeholder="Enter Distric" required>
                        <small id="Districdiscribe" class="form-text text-muted">Distric</small>
                    </div>
        
                    <div class="form-group">
                        <label for="City">City</label>
                        <input type="text" class="form-control" id="City" name="City" aria-describedby="Citydiscribe"
                            placeholder="Enter City" required>
                        <small id="Citydiscribe" class="form-text text-muted">City</small>
                    </div>
                    <div class="form-group">
                        <label for="BOD">Enter your birthday</label>
                        <input type="date" id="BOD" name="BOD" aria-describedby="bdaydiscribe"
                         required>
                        <small id="bdaydiscribe" class="form-text text-muted">bday</small>
                    </div>
                    <div class="form-group">
                        <label >Subject</label>
                        <input type="radio" class="form-control" id="Subject" value="Bio" name="Subject" aria-describedby="Subjectdiscribe"
                            placeholder="Enter Subject" required>
                        <labele>Bio</labele>
                        <input type="radio" class="form-control" id="Subject" value="Maths" name="Subject"
                            aria-describedby="Subjectdiscribe" placeholder="Enter Subject" required>
                        <labele>Maths</labele>
                        <small id="Subjectdiscribe" class="form-text text-muted">Subject</small>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" id="Email" name="Email" aria-describedby="Emaildiscribe"
                            placeholder="Enter Email" >
                        <small id="Emaildiscribe" class="form-text text-muted">Email</small>
                        </div>
                        <div class="form-group">
                        <label for="PhoneNo">PhoneNO</label>
                        <input type="text" class="form-control" id="PhoneNo" name="PhoneNo" aria-describedby="PhoneNodiscribe"
                            placeholder="Enter PhoneNo" >
                        <small id="PhoneNodiscribe" class="form-text text-muted">PhoneNO</small>
                        </div>
                    <br>
                    <button type="submit" class="btn btn-secondary btn-lg">Save</button>
                  
        
        
        
        
        
                </div>
            </form>
            <h1 class="h3 mb-4 text-gray-800">view Students</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>IndexNO</th>
                                            <th>Name</th>
                                            <th>Gardian Name</th>
                                            <th>Address</th>
                                            <th>District</th>
                                            <th>City</th>
                                            <th>BOD</th>
                                            <th>Subject</th>
                                            <th>Email</th>
                                            <th>PhoneNO</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>IndexNO</th>
                                            <th>Name</th>
                                            <th>Gardian Name</th>
                                            <th>Address</th>
                                            <th>District</th>
                                            <th>City</th>
                                            <th>BOD</th>
                                            <th>Subject</th>
                                            <th>Email</th>
                                            <th>PhoneNO</th>

                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            foreach($result as $res){
                                         ?>
                                        <tr>
                                            <td><?php echo $res['IndexNO']; ?></td>
                                            <td><?php echo $res['Name']; ?></td>
                                            <td><?php echo $res['Gardian_name']; ?></td>
                                            <td><?php echo $res['Address']; ?></td>
                                            <td><?php echo $res['District']; ?></td>
                                            <td><?php echo $res['City']; ?></td>
                                            <td><?php echo $res['BOD']; ?></td>
                                            <td><?php echo $res['Email']; ?></td>
                                            <td><?php echo $res['PhoneNo']; ?></td>




                                        </tr>
                                        <?php
                        // print_r($res);
                      }
                      ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
           

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    <?php require('footer.php');?>
































