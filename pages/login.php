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
<style>
  .form-group {
    margin-bottom: 20px;
}

.captcha {
    display: inline-block;
    margin-top: 10px;
    padding: 10px;
    font-size: 24px;
    font-weight: bold;
    font-family: 'Courier New', Courier, monospace;
    background-color: #f0f0f0;
    border: 2px solid #ccc;
    border-radius: 4px;
    letter-spacing: 4px;
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.1);
    user-select: none;
}

.captcha-input {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.show-password {
            margin-left: 10px;
        }

</style>
<?php
$rand = rand(1000, 9999);


?>
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
          }else if($_GET['error'] == 'emptycaptcha'){
            ?>
            <small class="alert alert-danger">
                Captcha is required.
            </small>
            <?php
          }else if($_GET['error'] == 'captchainvalid'){
            ?>
            <small class="alert alert-danger">
                Captcha is invalid.
            </small>
            <?php
          }else if($_GET['error'] == 'invalidpassword'){
            ?>
            <small class="alert alert-danger">
                Password is invalid.
            </small>
            <?php
          }else if($_GET['error'] == 'usernotfound'){
            ?>
            <small class="alert alert-danger">
                User not found.
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
        Login here
      </h3>
    </div>
      <div class="container d-flex justify-content-center">
        
            <form action="http://localhost/sky/processes/loginProcess.php" method="post">

              <div class="form-group">

                
              <label for="exampleInputUserName1">UserName</label>
              <input type="text" class="form-control" name="userName" id="exampleInputUserName1" placeholder="Username">

              </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <input type="checkbox" id="show-password" class="show-password">
                    <label for="show-password">Show Password</label>
                </div>
                
                <input type="hidden" name="captcha-rand" value="<?php echo $rand;?>">

                <div class="form-group">
                    <label for="captcha-code">Captcha Code</label>
                    <div class="captcha"><?php echo $rand; ?></div>
                    
                </div>

                <div class="form-group">
                    <label for="captcha">Captcha</label>
                    <input type="captcha" name="captcha" class="form-control" id="captcha" placeholder="Enter captcha">
                </div>

                <!-- <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <center>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Login</button>
                </center>
                
            </form>
    </div>
   
    <script>
        // This script will toggle the password visibility when the checkbox is checked
        document.getElementById('show-password').addEventListener('change', function () {
            var passwordField = document.getElementById('exampleInputPassword1');
            if (this.checked) {
                passwordField.type = 'text'; // Show the password
            } else {
                passwordField.type = 'password'; // Hide the password
            }
        });
    </script>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>