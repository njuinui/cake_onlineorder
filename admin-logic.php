<?php

require 'configur/database.php';


if (isset($_POST['submit'])) {
    
    $admin_id = filter_var($_POST['adminID'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['admin_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$admin_id) {
        $_SESSION['admin-login'] = "Identification Number required";
    }elseif (!$username) {
        $_SESSION['admin-login'] = "Username required";
    }elseif (!$password) {
        $_SESSION['admin-login'] = "Password required";
     }else {
        //fetch user from the database
        $fetch_user_query = "SELECT * FROM admin WHERE admin_id = '$admin_id' AND username = '$username'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if (mysqli_num_rows($fetch_user_result) == 1) {
          //convert the record into associative array
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];
            //compare form password with database password
            if ($password == $db_password) {
                //# set session for access control
                $_SESSION['admin_success'] = $username ;
                $_SESSION['user-id'] = $user_record['id'];
                header('location: ' . ROOT_URL . 'admin/');
            }else {
                $_SESSION['admin-login'] = "Please check Your input";
            }

        } else {
            //if the passord or username or IDnumber doesn't exist
            $_SESSION['admin-login'] = "User Not Found"; 
        }   
     } 
     
    // // if there's any problem, redirect back to home paage
    if (isset($_SESSION['admin-login'])) {
        $_SESSION['admin-login-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin_login.php');
        die();
    }
                
} 
else {
        header('location: ' . ROOT_URL . 'admin_login.php');
        die();
}

