<?php 
$server="localhost";
$username="root";
$password="";
$database="Zalego";

$conn=mysqli_connect($server,$username,$password,$database);

if($conn)
{
    echo 'database connection success';
}
else{
    echo 'error occured' . myqli_error($conn);
}

?>
