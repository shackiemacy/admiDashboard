<?php
require_once('logics/dbconnection.php');
$querystudent= mysqli_query($conn,
 "SELECT * FROM enrollment WHERE no='" .$_GET['id']."' ");
while($fetchstudent =mysqli_fetch_array($querystudent))
{
    $firstname = $fetchstudent['fullname'];
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
                        <h4>Edit Macy Wanjiku
                        </h4>




                    </div>
                    <div class="card-body">
    <span class="float-right"></span>

        <form action="edit-enrollment.php"method="POST">
            <div class="row">
                <div  class="mb-3 col-lg-6">
                    <label for="Full Name" class="form-label"><b>Full Name</b></label>
                     <input type="text" name="fullname"class="form-control" placeholder="Enter Your Full Name">
                </div>
                    <div class="mb-3 col-lg-6">
                        <label for="Phone Number" class="form-label"><b>Phone Number:</b></label>
                        <input type="text"name="phonenumber"class="form-control" placeholder="+2547......">
                    </div>
                </div>
            <div class="row">
                <div  class="mb-3 col-lg-6">
                    <label for="Email Address" class="form-label"><b>Email</b></label>
                    <input type="Email" name="email"class="form-control" placeholder="Please enter your email">
                </div>
                <div  class="mb-3 col-lg-6">
                    <label for="Gender" class="form-label"><b>What's your gender?</b></label>
                    <select class="form-select" name="gender">
                        <option selected>--select your gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                 </div>
            </div> 

                <p>
                     In order to complete your Enrollment to the  bootcamp ,
                    you are required to select one course you will be undertaking .
                    Please NOTE that this will be your learning track during the 2-weeks
                    immersion.
                </p>
            <div class="row">
                <div class="col-lg-6">
                    <label for="course" class="form-label">What's your preferred course?</label>
                     <select class="form-select" name="course" >
                        <option selected>--select your course--</option>
                        <option value="web development">web development</option>
                        <option value="cyber security">cyber security</option>
                    </select>
                </div>
            </div>
                    <p>
                        You agree by providing your information to you understand all our data privacy and
                        protection policy outlined in our terms & conditions and the privacy policy statements.
                    </p>

        <div class="col-lg-6">
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="Agree terms & condition">
                    Agree terms & condition
                </label>
            </div>
        </div>
                <div class="enroll">
                    <div  class="mb-3 col-lg-4">
                        <button type="Enroll" class="btn btn-primary" name="Enroll">Enroll</button>
                    </div>
                </div>
                    <p class="si">
                        subscribe to get information ,
                        latest news about Zalego Academy
                    </p>

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