<?php
$server='localhost';
$username='root';
$password='';
$database='zalego';

$conn = mysqli_connect($server,$username,$password,$database);

$sql = mysqli_query($conn, "SELECT * FROM enrollment");

?>

<!DOCTYPE html>
<html lang="en">
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
<div class="header">
    <img src="images/logo2.png"ait="zalego" height="50" class="rounded-circle">
<a href="#" class="navbar-trigger"><span></span></a>
</div>
<div class="sidebar">
 <?php require_once('includes/sidebar.php') ?>
 
</div>
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-reader bg-dark text-white text-center">
                    <span>Add Student</span>
                    <a href="add-student.php" class="btn btn-primary btn-sm float-end">Add</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-hover table-responsive" style="fontsize:12px;">
                        <thead>
                            
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">FullName</th>
                                <th scope="col">PhoneNumber</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Course</th>
                                 <th scope="col">Enrolled on</th>
                                 <th scope="col">Action</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php while($fetchEnrollmentRecord= mysqli_fetch_array($sql)) {?>

                        <tr>
                                <td><?php echo $fetchEnrollmentRecord['no'];?></td>
                                <td><?php echo $fetchEnrollmentRecord['fullname'];?></td>
                                <td><?php echo $fetchEnrollmentRecord['phonenumber'];?></td>
                                <td><?php echo $fetchEnrollmentRecord['email'];?></td>
                                <td><?php echo $fetchEnrollmentRecord['course'];?></td>
                                <td><?php echo $fetchEnrollmentRecord['gender'];?></td>
                                <td><?php echo $fetchEnrollmentRecord['created_at'];?></td>
                                <td> 

                                    <a href="edit-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="view-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="delete-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    
                                </td>
                                
            
                        </tr>
                            <?php  }?>   
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
     </body>
</html>