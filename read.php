<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    $id =$_GET['id'];
    // Prepare a select statement
    $sql = "SELECT * FROM employees WHERE id = '$id'";

    $run = mysqli_query($mysqli,$sql);
    $query = mysqli_fetch_assoc($run);
    
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        .form-control-static{
            font-weight: bold;
            font-family: lato;
        }
    </style>
</head>
<body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-2">
                    <div class="card mt-5 p-3 bg-light shadow">
                        <div class="display-5 text-center">
                        <h1>View Record</h1>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>Name :</label>
                        <span class="form-control-static"><?php echo $query["name"]; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Address :</label>
                        <span class="form-control-static"><?php echo $query["address"]; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Salary :</label>
                        <span class="form-control-static"><?php echo $query["salary"]; ?></span>
                    </div>
                    <span><a href="index.php" class="btn btn-primary">Back</a></span>
                    </div>
                </div>
            </div>        
        </div>
</body>
</html>