<?php
// 1.database connection
require_once('logics/dbconnection.php');
$sqlfetchEnrolledStudent =mysqli_query($conn,
    "SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");
while($fetchstudent =mysqli_fetch_array($sqlfetchEnrolledStudent))
{
    $fullname=$fetchstudent['fullname'];
    $email=$fetchstudent['email'];
    $phonenumber=$fetchstudent['phonenumber'];
    $gender=$fetchstudent['gender'];
    $course=$fetchstudent['course'];
    $created_at=$fetchstudent['created_at'];
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
require_once('includes/headers.php')
?>
<body>

<?php require_once('includes/navbar.php')?>

<div class="sidebar">
    <?php require_once('includes/sidebar.php')?>
</div>
<div class="main-content pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h4 class="card-tittle">personal information</h4>
                </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Full Name:<span class="float-end badge bg-primary"><?php echo $fullname ?></span> </li>
                            <li class="list-group-item">Course:<span class="float-end badge bg-secondary"><?php echo $course ?></span></li>
                            <li class="list-group-item">created_at:<span class="float-end badge bg-danger"><?php echo $created_at ?></span></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-6">
                <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h4 class="card-tittle">Other information</h4>
                </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Gender:<span class="float-end badge bg-primary"><?php echo $gender ?></span> </li>
                            <li class="list-group-item">course:<span class="float-end badge bg-secondary"><?php echo $course ?></span></li>
                            <li class="list-group-item">created_at:<span class="float-end badge bg-danger"><?php echo $created_at?></span></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('includes/scripts.php')?>
</body>
</html>
