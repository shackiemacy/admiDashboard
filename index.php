<!DOCTYPE html>
<html lang="en">
<?php
require_once('logics/dbconnection.php');

// counting total number of students
$queryEnrolledStudents =mysqli_query($conn, "SELECT * FROM enrollment");
$countTotalStudents = mysqli_num_rows($queryEnrolledStudents);

// count by gender
$queryEnrolledFemale =mysqli_query($conn, "SELECT * FROM enrollment WHERE gender ='female' ");
$countAllFemale =mysqli_num_rows($queryEnrolledFemale);

require_once('includes/headers.php');
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
                    <span>Courses</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-folder-open fa-3x"></i></span>
                    <span class="float-end badge bg-dark rounded-pill"><?php echo $countTotalStudents ?></span>
                </div>
                <div class="card-footer"></div>
            </div>

            <div class="col-lg-3">
                <div class="card-header bg-dark text-white text-center">
                    <span>campuses</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-graduation-cap fa-3x"></i></span>
                    <span class="float-end">00</span>
                </div>
                <div class="card-footer"></div>
            </div>

            <div class="col-lg-3">
                <div class="card-header bg-dark text-white text-center">
                    <span>User</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-user fa-3x"></i></span>
                    <span class="float-end">00</span>
                </div>
                <div class="card-footer"></div>
            </div>

            <div class="col-lg-3">
                <div class="card-header bg-dark text-white text-center">
                    <span>students</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-group fa-3x"></i></span>
                    <span class="float-end">00</span>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card-header bg-dark text-white text-center">
                    <span>Student Analysis</span>
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