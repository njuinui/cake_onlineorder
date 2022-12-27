<?php
 
 require 'configur/database.php';

if (isset($_POST['submit'])) {
    //get form data
    $username = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$username) {
        $_SESSION['signin'] = "Enter User Name OR User Email";
    }elseif(!$password) {
        $_SESSION['signin'] = "Enter user password";
    }else {
        //fetch user from the database
        $fetch_user_query = "SELECT * FROM users WHERE uname = '$username' OR email = '$username'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if (mysqli_num_rows($fetch_user_result) == 1) {
           //convert the record 
           $user_record = mysqli_fetch_assoc($fetch_user_result);
           $db_password = $user_record['password'];
           //compare form password with database password

           if (password_verify($password, $db_password)) {
            $_SESSION['user_id'] = $user_record['id'];
            $_SESSION['success'] = "Thank you signin into our system";
            if ($user_record['password'] == $password) {
                $_SESSION['user_is_user'] = true;
            }
            $_SESSION['signup-success'] = "Welcome Mr/Md ".$username. ". You're at the right place, place your order now ";
            header('location: ' .ROOT_URL. 'index.php');
           }else {
            $_SESSION['signin'] = 'Please check your password';
            }
        }else {
            $_SESSION['signin'] = "User not found";
        }

    }

if (isset($_SESSION['signin'])) {
    $_SESSION['signin-data'] = $_POST;
    header('location: ' . ROOT_URL . 'user_login.php');
    die();
}    
}else {
    header('location: ' . ROOT_URL . 'user_login.php');
} 