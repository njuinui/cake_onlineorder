<?php

require 'configur/database.php';

//get signup form data if signup button was clicked
if (isset($_POST['add-user'])) {
  $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $createpassword = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $confirmpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $address = filter_var($_POST['address'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $phone = filter_var($_POST['phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $avatar = $_FILES['photo'];

  if (!$firstname) {
    $_SESSION['signup'] = 'Please enter your First Name';
  } elseif (!$lastname) {
   $_SESSION['signup'] = 'Please enter your Last Name';
  }elseif (!$username) {
    $_SESSION['signup'] = 'Please enter username';
  }elseif (!$email) {
    $_SESSION['signup'] = 'Please enter a valid email';
  }elseif (!$phone) {
    $_SESSION['signup'] = 'Please enter your phone number';
  }elseif (!$address) {
    $_SESSION['signup'] = 'Please enter your address';
  }elseif (strlen($createpassword) < 8 || strlen($confirmpassword) <8) {
    $_SESSION['signup'] = 'Password should be 8+ charater';
  } elseif (!$avatar['name']) {
   $_SESSION['signup'] = 'Please add avatar';
  }else {
     // check if password does not match
     if ($createpassword !== $confirmpassword ) {
        $_SESSION['signup'] = 'Password do not match';
     }else {
      //hash password 
      $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
      //Check if the username or email already exist in the database

      $user_check_query = "SELECT * FROM users WHERE  uname = '$username' OR email = '$email'";
      $user_check_result = mysqli_query($connection, $user_check_query);
      if (mysqli_num_rows($user_check_result) > 0) {
        $_SESSION['signup'] = 'Username Or Email already exist';
      }else {
        //work on avatar
        //rename
        $time = time();
        $avatar_name = $time . $avatar['name'];
        $avatar_tmp_name = $avatar['tmp_name'];
        $avatar_destination_path = 'images/'. $avatar_name;

        //make sure file is an image
        $allowed_files =['png', 'jpg', 'jpeg'];
        $extention = explode('.', $avatar_name);
        $extention = end($extention);
        if (in_array($extention,$allowed_files)) {
         if ($avatar['size'] < 1000000) {
          move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
         }else { 
          $_SESSION['signup'] = 'File size too big. Should be less than 1mb';
         }
        }else {
          $_SESSION['signup'] = 'File should be jpg, png, or jpeg';
        }
      }
     }   
    } 
    //if there's any error redirect back to the register page
    if (isset($_SESSION['signup'])) {
      //pass form data to register page
      $_SESSION['signup-data'] = $_POST;
      header('location: ' .ROOT_URL . 'admin/add-user.php');
      die();
    }else {
          //insert new user into users table
        $insert_user_query = "INSERT INTO users(fname, lname, uname, email, password,address,contact, photo,status) VALUES ('$firstname', '$lastname', '$username', '$email', '$hashed_password','$address','$phone','$avatar_name', 'Approved')";

        $insert_user_result = mysqli_query($connection, $insert_user_query);
        if (!mysqli_errno($connection)) {
            //redirect to login page with success message
            $_SESSION['signup-success'] = "New User added successfully";

            header('location: ' .ROOT_URL. 'admin/users.php');
            die();
        }
      }
  } else {
    //if button wasn't click, bounce back to registration page
    header('location: ' . ROOT_URL . 'admin/users.php');
    die();
  }  