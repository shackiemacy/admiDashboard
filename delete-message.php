<?php
require_once('logics/dbconnection.php');
$sqldeletemessage = mysqli_query($conn, "DELETE FROM contactus WHERE no='" .$_GET['id']."' ");
if($sqldeletemessage)
{
    echo "Message deleted succesfully";
    header('location:contactus.php');
}
else
{
    echo"Message Deleted Unsuccesful!";
}
?>