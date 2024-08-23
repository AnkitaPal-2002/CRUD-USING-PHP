<?php



if(isset($_POST["submit"])){
    //var_dump($_POST);
    include("../config/db.php");
    

    $userName = $_POST["userName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    if(empty($userName)){
        header('Location: http://localhost/sky/pages/register.php?error=emptyUserName');
        exit;
    }
    if(empty($email)){
        header('Location: http://localhost/sky/pages/register.php?error=emptyemail');
        exit;
    }
    if(empty($password)){
        header('Location: http://localhost/sky/pages/register.php?error=emptypassword');
        exit;
    }


    if(!empty($userName) && !empty($email) && !empty($password)){



        $tb_userName = mysqli_real_escape_string($connection, strip_tags($_POST['userName']));
        $tb_email = mysqli_real_escape_string($connection, strip_tags($_POST['email']));

        $tb_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "select username from user where username = '$tb_userName'";
        $res = mysqli_query($connection, $query);

        if(mysqli_num_rows($res)>0){
            header('Location: http://localhost/sky/pages/register.php?error=usernamefail');
            exit;    
        }else{
            $sql = "INSERT INTO user (username, email, password) values ('$tb_userName', '$tb_email', '$tb_password') ";

            $result = mysqli_query($connection, $sql);
    
            if($result){
                header('Location: http://localhost/sky/pages/register.php?success=usercreated');
            }else{
                header('Location: http://localhost/sky/pages/register.php?error=usercreatefail');
            }
        }

        
    }
}


?>