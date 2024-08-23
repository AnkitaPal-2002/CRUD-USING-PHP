<?php
    include('../config/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header>
      <?php
        include('../includes/navigation.php');
      
      ?>
<!-- </nav> -->
    </header>

    

    <div align="center">

            <?php

        if(isset($_GET['error'])){
          if($_GET['error'] == 'emptyUserName'){
            ?>
            <small class="alert alert-danger">
                Username is required
            </small>
            <?php
          }else if($_GET['error'] == 'emptyemail'){
            ?>
            <small class="alert alert-danger">
                Email is required
            </small>
            <?php
          }else if($_GET['error'] == 'emptypassword'){
            ?>
            <small class="alert alert-danger">
                Password is required
            </small>
            <?php
          }else if($_GET['error'] == 'usercreatefail'){
            ?>
            <small class="alert alert-danger">
                Something went wrong
            </small>
            <?php
          }else if($_GET['error'] == 'usernamefail'){
            ?>
            <small class="alert alert-danger">
                Username not available
            </small>
            <?php
          }
        }else if(isset($_GET['success'])){
          if($_GET['success'] == 'usercreated'){
            ?>
            <small class="alert alert-success">
                User signed up sucessfully.
            </small>
            <?php
          }
        }


?>  
    <br>
    <br>
    <br>

      <h3>
        Sign in Here
      </h3>
    </div>
      <div class="container d-flex justify-content-center">


        
            <form action="http://localhost/sky/processes/signupProcess.php" method="post">
            <div class="form-group">

                
                <label for="exampleInputUserName1">UserName</label>
                <input type="text" class="form-control" name="userName" id="exampleInputUserName1" placeholder="Username">

            </div>

                <div class="form-group">


                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">


                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>


                </div>
                <div class="form-group">


                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
               
                <input type="submit" name="submit" value="Register"  class="btn btn-primary">
            </form>
    </div>
   


</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>