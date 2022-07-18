<?php
$server='localhost';
$username='root';
$password='';
$database='zalego';

$conn = mysqli_connect($server,$username,$password,$database);

$sql = mysqli_query($conn, "SELECT * FROM contactus");

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
                <div class="card-reader bg-dark text-white text-center">
                    <span>Contact Us Records</span>
                </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-hover table-responsive" style="fontsize:12px;">
                        <thead>
                            
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">firstname</th>
                                <th scope="col">lastname</th>
                                <th scope="col">email</th>
                                <th scope="col">phonenumber</th>
                                <th scope="col">message</th>
                                 <th scope="col">created_at</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php while($fetchcontactusRecord= mysqli_fetch_array($sql)) {?>

                        <tr>
                                <td><?php echo $fetchcontactusRecord['no'];?></td>
                                <td><?php echo $fetchcontactusRecord['firstname'];?></td>
                                <td><?php echo $fetchcontactusRecord['lastname'];?></td>
                                <td><?php echo $fetchcontactusRecord['email'];?></td>
                                <td><?php echo $fetchcontactusRecord['phonenumber'];?></td>
                                <td><?php echo $fetchcontactusRecord['message'];?></td>
                                <td><?php echo $fetchcontactusRecord['created_at'];?></td>
                                <td> 

                                    
                                    <a href="edit-message.php?id=<?php echo $fetchcontactusRecord['no'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="view-message.php?id=<?php echo $fetchcontactusRecord['no'] ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="delete-message.php?id=<?php echo $fetchcontactusRecord['no'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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