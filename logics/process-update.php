<?php
require_once('logics/dbconnection.php');
// updating user records
if(isset($_POST['updateenrollment']))
{
    // fetch form data
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];

    // perform sql query
    $updaterecords =mysqli_query($conn,
    "UPDATE enrollment set fullname='$fullname',phonenumber='$phonenumber',email='$email',gender='$gender',course='$course'
    WHERE no='".$_GET['id']."'");
    if( $updaterecords)
{
    $message ="Records Updated Successfully!";
}
else{
    $message ="Records update Unsuccessful";
}  
}
?>