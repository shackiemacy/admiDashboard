<?php
if (isset($_POST["addstudent"]))
{
  $fullname=$_POST["fullname"];
  $phonenumber=$_POST["phonenumber"];
  $email=$_POST["email"];
  $gender=$_POST["gender"];
  $course=$_POST["course"];

  $addstudent=mysqli_query($conn, "INSERT INTO enrollment(fullname,phonenumber,email,gender,course)VALUES('$fullname', '$phonenumber', ' $email', '$gender', '$course')");

  require_once('logics/dbconnection.php');
  $sqladdstudent = mysqli_query($conn, "DELETE FROM enrollment WHERE no='" .$_GET['id']."' ");
if($sqladdstudent)
{
    echo "student added succesfully";
    header('location:add-student.php');
}
else
{
    echo"student added Unsuccesful!";
}

  }
  

?>