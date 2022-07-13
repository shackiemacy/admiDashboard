<!DOCTYPE html>
<html lang="en">
<?
require_once('logics/dbconnection.php');
// counting total number of students
$queryEnrolledStudents =mysqli_query($conn, "SELECT * FROM enrollment");
$countAllStudents =mysqli_num_rows($queryEnrolledStudents);

// count by gender
$queryEnrolledFemale =mysqli_query($conn, "SELECT * FROM enrollment WHERE gender='female' ");
$countAllFemale =mysqli_num_rows($queryEnrolledFemale);

require_once('includes/headers.php')
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Admin Template</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php
require_once('includes/navbar.php')
?>
<div class="sidebar">
    <?php
    require_once('includes/sidebar.php')
    ?>
</div>
<div class="main-content">
       
    <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Top Content</span>
                    </div>
                </div>
        </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Students</span>
                        </div>
                            <div class="card-body">
                                <span><i class="fa fa-group fa-3x"></i></span>
                                <span class ="float-end badge bg-dark rounded-pill"><?php echo $countAllStudents ?> </span>
                            </div>
                                <div class="card-footer">
                                </div>
                                    <div class="col-lg-3">
                                        <div class="card-header bg-dark text-white text-center">
                                                <span>Available courses</span>
                </div>
        <div class="card-body">
            <span><i class="fa fa-group"></i></span>
            <span class="float-right">00</span>
        </div>
        <div class="card-footer"></div>
    </div>
    
    <div class="col-lg-3">
        <div class="card-header bg-dark text-white text-center">
            <span>Campuses</span>
        </div>
        <div class="card-body">
            <span><i class="fa fa-group"></i></span>
            <span class="float-end"><?php echo $countAllFemale ?></span>
        </div>
        <div class="card-footer"></div>
    </div>

    <div class="col-lg-3">
        <div class="card-header bg-dark text-white text-center">
            <span>Users</span>
        </div>
        <div class="card-body">
            <span><i class="fa fa-group"></i></span>
            <span class="float-right">00</span>
        </div>
        <div class="card-footer"></div>
    </div>
    <div class="col-lg-12">
        <div class="card-header bg-dark text-white text-center">
            <span>Student Analysis</span>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once('includes/scripts.php')
?>
</body>
</html>