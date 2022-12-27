<?php
require 'configur/database.php';

if (isset($_POST['edit-user'])) {
   //get update from data
   $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
   $firstname = filter_var($_POST['fname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $lastname = filter_var($_POST['lname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $username = filter_var($_POST['uname'], FILTER_SANITIZE_NUMBER_INT);

   //check valid input
    if (!$firstname || !$lastname) {
       $_SESSION['edit_user'] = "Invalid form input on edit page";
    }else {
        //update user
        $query = "UPDATE users SET fname = '$firstname', lname = '$lastname', uname = $username WHERE id = $id LIMIT 1";
        $result = mysqli_query($connection, $query);

        if (mysqli_errno($connection)) {
            $_SESSION['edit_user'] = "Failed to update user.";
        }else {
            $_SESSION['edit_user_success'] = "User $firstname $lastname $username updated successful";
            
            header('location: ' .ROOT_URL. '/admin/users.php');
            die();
        }
    }
}

header('location: ' .ROOT_URL. 'admin/users.php');
die();