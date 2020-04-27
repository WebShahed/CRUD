<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body> <?php
                    // Include config file
                    require_once "config.php";
                    $sql ="SELECT * FROM employees";
                    $query = mysqli_query($mysqli,$sql);
                    

                    ?>     
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-2 ">
                    <div class="text-center">
                        <h2 class="pull-left">Employees Details</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New Employee</a>
                    </div>
                   <table class="table  table-bordered table-hover  mt-5 table-striped">
                       <thead>
                         <tr>
                           <th>Name</th>
                           <th>Address</th>
                           <th>Salary</th>
                           <th>Action</th>
                         </tr>
                       </thead>
                       
                       <tbody>
                           <?php while($results= mysqli_fetch_array($query)){?>
                            <tr>
                               <td><?php echo $results['name']; ?></td> 
                               <td><?php echo $results['address']; ?></td>
                               <td><?php echo $results['salary'] ?></td>
                               <td>
                                   <a href="read.php? id=<?php echo $results['id'];?>" class="btn btn-sm btn-success">View</a>
                                   <a href="update.php? id=<?php echo $results['id'];?>" class="btn btn-sm btn-info">Edit</a>
                                   <a href="delete.php? id=<?php echo $results['id'];?>" class="btn btn-sm btn-danger">Delete</a>
                               </td>
                            </tr>
                            <?php } ?>

                       </tbody>

                   </table>
                     
                </div>
            </div>        
        </div>
    </div>
<!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script> -->
</body>
</html>