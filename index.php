

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
                    <div class="card-reader bg-dark text-white text-center">
                        <span>Top Content</span>
                    </div>
                </div>
            </div>
        </div>
                <div class="row">
    <div class="col-lg-3">
        <div class="card-reader bg-dark text-white text-center">
            <span>Students</span>
        </div>
        <div class="card-body"></div>
        <div class="card-footer"></div>
        </div>

    <div class="col-lg-3">
        <div class="card-reader bg-dark text-white text-center">
            <span>Available courses</span>
        </div>
        <div class="card-body">
            <span><i class="fa fa-group"></i></span>
            <span class="float-right">00</span>
        </div>
        <div class="card-footer"></div>
    </div>
    
    <div class="col-lg-3">
        <div class="card-reader bg-dark text-white text-center">
            <span>Campuses</span>
        </div>
        <div class="card-body">
            <span><i class="fa fa-group"></i></span>
            <span class="float-end">00</span>
        </div>
        <div class="card-footer"></div>
    </div>

    <div class="col-lg-3">
        <div class="card-reader bg-dark text-white text-center">
            <span>Users</span>
        </div>
        <div class="card-body">
            <span><i class="fa fa-group"></i></span>
            <span class="float-right">00</span>
        </div>
        <div class="card-footer"></div>
    </div>
    <div class="col-lg-12">
        <div class="card-reader bg-dark text-white text-center">
            <span>Student Analysis</span>
        </div>
    </div>
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