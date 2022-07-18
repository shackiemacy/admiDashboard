<?php
// 1.database connection
require_once('logics/dbconnection.php');
$sqlfetchcontactusRecord =mysqli_query($conn,
    "SELECT * FROM contactus WHERE no='".$_GET['id']."' ");
while($fetchcontactus =mysqli_fetch_array($sqlfetchcontactusRecord))
{
    $firstname=$fetchcontactus['firstname'];
    $lastname=$fetchcontactus['lastname'];
    $email=$fetchcontactus['email'];
    $phonenumber=$fetchcontactus['phonenumber'];
    $message=$fetchcontactus['message'];
    $created_at=$fetchcontactus['created_at'];
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
                            <li class="list-group-item">firstname:<span class="float-end badge bg-primary"><?php echo $firstname ?></span> </li>
                            <li class="list-group-item">lastname:<span class="float-end badge bg-secondary"><?php echo $lastname ?></span></li>
                            <li class="list-group-item">email:<span class="float-end badge bg-danger"><?php echo $email ?></span></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h4 class="card-tittle">Other information</h4>
                </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">phonenumber:<span class="float-end badge bg-primary"><?php echo $phonenumber ?></span> </li>
                            <li class="list-group-item">message:<span class="float-end badge bg-secondary"><?php echo $message ?></span></li>
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
