<?php 

require("dbconnection.php");

try {

    // $sql = "UPDATE bookmarks
    //         SET podcast=122, text='some text'
    //         WHERE id = 152";

    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    // echo $stmt->rowCount() . " records UPDATED successfully";

        $sql ="SELECT std.indexNo,std.Name,std.classId,atd.Attendant,atd.Date FROM `attendance` as atd ,`student` as std WHERE atd.IndexNo = std.indexNo and atd.Date = $";   
    
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
    <meta name="referrer" content="no-referrer" />

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
                            <div class="form-group">
                                <div>
                                     <label for="Date">Date</label>
                                     <input type="date" id="date" name="date" aria-describedby="datediscribe"
                                        required>
                                    <small id="datediscribe" class="form-text text-muted">Date</small>                        
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <label for="Date">Grade</label>
                                    <select id="grade" name="grade">
                                        <option>12</option>
                                    </select>
                                    <small id="datediscribe" class="form-text text-muted">Grade</small>
                                </div>                              
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
                                      <?php
                                            foreach($result as $res){
                                         ?>

                                      <tr>
                                      <td><?php echo $res['indexNo']; ?></td>
                                      <td><?php echo $res['Name']; ?></td>
                                        <td>
                                        <button class="btn btn-success btn-circle" 
                                          onclick="atttendent('<?php echo $res['indexNo']; ?>')"><a href="#"><i class="fas fa-check"></i></a></button>                                          
                                        </td>                                       
                                    </tr>                                            
                             <?php } ?>
                  
                </thead>
             </table>
        </div>
    </div>
    <?php require('footer.php');?>
</div>
<script>
    function atttendent(indexNo){
            var selectedDate = $("#date").val();
            var selectedGrade = $("#grade").val();
            if(selectedDate==''||selectedGrade==''||indexNo=='') {
                alert("Please fill all fields.");
                return false;
            }          
            $.ajax({
                type: "POST",
                url: " saveAttendance.php",
                dataType: 'json',                
                headers: {
                    'Access-Control-Allow-Origin': '*',
                },
                data: {
                    selectedDate: selectedDate,
                    selectedGrade: selectedGrade,
                    indexNo: indexNo
                    },
                        cache: false,
                        success: function(data) {
                        alert(data);
                    },
                        error: function(xhr, status, error) {
                        console.error(xhr);
                    }
             }); 
    }



    
    $(document).ready(function() {    
        $("#submit").click(function() {        
            var firstName = $("#firstName").val();
            var lastName = $("#lastName").val();
            var email = $("#email").val();
            var message = $("#message").val();
            
            if(firstName==''||lastName==''||email==''||message=='') {
                alert("Please fill all fields.");
                return false;
            }
            
            $.ajax({
                type: "POST",
                url: " .php",
                data: {
                    firstName: firstName,
                    lastName: lastName,
                    email: email,
                    message: message
                    },
                        cache: false,
                        success: function(data) {
                        alert(data);
                    },
                        error: function(xhr, status, error) {
                        console.error(xhr);
                    }
             });        
            });    
    });
</script>              