<?php

    $message='';
require_once('logics/dbconnection.php');
$querycontactus= mysqli_query($conn,
 "SELECT * FROM contactus WHERE no='".$_GET['id']."'");
while($fetchcontactusRecord =mysqli_fetch_array($querycontactus))
{
    $id=$fetchcontactusRecord['no'];
    $firstname = $fetchcontactusRecord['firstname'];
    $lastname = $fetchcontactusRecord['lastname'];
    $email= $fetchcontactusRecord['email']; 
    $phonenumber= $fetchcontactusRecord['phonenumber']; 
    $message= $fetchcontactusRecord['message']; 
    $created_at= $fetchcontactusRecord['created_at']; 
    
}
require_once('logics/process-update.php')
?>
<!DOCTYPE html>
<html lang="en">
<?php
require_once('includes/headers.php')
?>
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
                <div class="card">
                    <div class="card-header bg-dark text-center text-white">
                        <h4>Edit Message</h4>
                        <?php echo $message ?>
                    </div>
                    <div class="card-body">
    <span class="float-right"></span>

        <form action="edit-message.php?id=<?php echo $id ?>"method="POST">
            <div class="row">
                <div  class="mb-3 col-lg-6">
                    <label for="firstname" class="form-label"><b>firstname</b></label>
                     <input type="text" name="firstname" value="<?php echo $firstname ?>"class="form-control" placeholder="Enter Your firstname">
                </div>
                    <div class="mb-3 col-lg-6">
                        <label for="lastname" class="form-label"><b>lastname:</b></label>
                        <input type="text"name="lastname" value="<?php echo $lastname ?>"class="form-control" placeholder="Enter Your Lastname">
                    </div>
                </div>
            <div class="row">
                <div  class="mb-3 col-lg-6">
                    <label for="phonenumber" class="form-label"><b>phonenumber</b></label>
                    <input type="text" name="email" value="<?php echo $phonenumber ?>"class="form-control" placeholder="Please enter your +2547.....">
                </div>
                <div  class="mb-3 col-lg-6">
                    <label for="email" class="form-label"><b>email</b></label>
                    <input type="email" name="email" value="<?php echo $email ?>"class="form-control" placeholder="Please enter your email">
                </div>
            </div>

            <div class="row">
                <div  class="mb-3 col-lg-6">
                    <label for="message" class="form-label"><b>message</b></label>
                    <input type="text" name="email" value="<?php echo $message ?>"class="form-control" placeholder="Please Edit your message">
                </div>
                <div  class="mb-3 col-lg-6">
                    <label for="created_at" class="form-label"><b>created_at</b></label>
                    <input type="text" name="created_at" value="<?php echo $created_at ?>"class="form-control" placeholder="Edit Time">
                </div>
            </div>
            
            
        
                <div class="edit">
                    <div  class="mb-3 col-lg-4">
                        <button type="submit" class="btn btn-primary" name="edit message">Edit Message</button>
                    </div>
                </div>
        </form>
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