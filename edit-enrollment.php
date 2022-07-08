<?php
require_once('logics/dbconnection.php');
$querystudent= mysqli_query($conn,
 "SELECT * FROM enrollment WHERE no='".$_GET['id']."'");
while($fetchstudent =mysqli_fetch_array($querystudent))
{
    $fullname = $fetchstudent['fullname'];
    $phonenumber = $fetchstudent['phonenumber'];
    $email= $fetchstudent['email']; 
    $gender= $fetchstudent['gender']; 
    $course= $fetchstudent['course']; 
}

// updating user records
if(isset($_POST['update enrollment']))
{
    // fetch form data
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];

    // perform sql query
    $updaterecords =mysqli_query($conn,
    "UPDATE enrollment set fullname='$fullname',phonenumber='$phone',email='$email',gender='$gender',course='$course',
    WHERE id='".$_GET['id']."'");
    if( $updaterecords)
{
    $message ="Records Updated Successfully!";
}
else{
    $message ="Records update Unsuccessful";
}
    
}
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
                        <h4>Edit Student
                        </h4>




                    </div>
                    <div class="card-body">
    <span class="float-right"></span>

        <form action="edit-enrollment.php"method="POST">
            <div class="row">
                <div  class="mb-3 col-lg-6">
                    <label for="Full Name" class="form-label"><b>Full Name</b></label>
                     <input type="text" name="fullname" value="<?php echo $fullname ?>"class="form-control" placeholder="Enter Your Full Name">
                </div>
                    <div class="mb-3 col-lg-6">
                        <label for="Phone Number" class="form-label"><b>Phone Number:</b></label>
                        <input type="text"name="phonenumber" value="<?php echo $phonenumber ?>"class="form-control" placeholder="+2547......">
                    </div>
                </div>
            <div class="row">
                <div  class="mb-3 col-lg-6">
                    <label for="Email Address" class="form-label"><b>Email</b></label>
                    <input type="Email" name="email" value="<?php echo $email ?>"class="form-control" placeholder="Please enter your email">
                </div>
                <div  class="mb-3 col-lg-6">
                    <label for="Gender" class="form-label"><b>What's your gender?</b></label>
                    <select class="form-select" name="gender">
                        <option selected><?php echo $gender ?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    
                 </div>

            </div> 
            <div class="row">
                <div class="col-lg-6">
                    <label for="course" class="form-label">What's your preferred course?</label>
                     <select class="form-select" name="course" >
                        <option selected><?php echo $course ?></option>
                        <option value="web development">web development</option>
                        <option value="cyber security">cyber security</option>
                    </select>
                </div>
            </div>
        
                <div class="update">
                    <div  class="mb-3 col-lg-4">
                        <button type="submit" class="btn btn-primary" name="update enrollment">Update Records</button>
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