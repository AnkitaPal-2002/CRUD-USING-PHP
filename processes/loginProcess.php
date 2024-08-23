<?php
 session_start();

 
if(isset($_POST["submit"])){
    //var_dump($_POST);
    include("../config/db.php");
    

    $userName = $_POST["userName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $captcha_rand = $_POST["captcha-rand"];
    $captcha = $_POST["captcha"];
    
    if(empty($userName)){
        header('Location: http://localhost/sky/pages/login.php?error=emptyUserName');
        exit;
    }
    if(empty($email)){
        header('Location: http://localhost/sky/pages/login.php?error=emptyemail');
        exit;
    }
    if(empty($password)){
        header('Location: http://localhost/sky/pages/login.php?error=emptypassword');
        exit;
    }if(empty($captcha)){
        header('Location: http://localhost/sky/pages/login.php?error=emptycaptcha');
        exit;
    }if($captcha != $captcha_rand){
        header('Location: http://localhost/sky/pages/login.php?error=captchainvalid');
        exit;
    }


    if(!empty($userName) && !empty($email) && !empty($password)  && !empty($captcha) && $captcha == $captcha_rand){



        $tb_userName = mysqli_real_escape_string($connection, strip_tags($_POST['userName']));
        $tb_email = mysqli_real_escape_string($connection, strip_tags($_POST['email']));
        $tb_password = $_POST['password'];

        $sql = "select * from user where username='$tb_userName' and email='$tb_email'";
        $result = mysqli_query($connection, $sql);
        echo mysqli_num_rows($result);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            $stored_password_hash = $row['password'];

            // Verify the entered password against the stored hash
            if(password_verify($tb_password, $stored_password_hash)) {
                // Password is correct, proceed with login
                $_SESSION['userName'] = $tb_userName;
                header('Location: http://localhost/sky/pages/home.php?success=login');
                exit();
            } else {
                // Incorrect password
                header('Location: http://localhost/sky/pages/login.php?error=invalidpassword');
                exit();
            }
        }else{
                header('Location: http://localhost/sky/pages/login.php?error=usernotfound');
        }
    }
}

        





?>