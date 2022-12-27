<?php

require 'configur/database.php';


if (isset($_POST['add_product'])) {
   $pr_name = filter_var($_POST['pr_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $pr_id = filter_var($_POST['pr_id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $des = filter_var($_POST['desc'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $pprice = filter_var($_POST['prprice'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $photo = $_FILES['photo'];

   if(!$pr_name || !$pprice || !$photo){
      $_SESSION['add_pr'] = "Add all fields are required";
   }else {
      $query = "SELECT * FROM products WHERE prname = '$pr_name' OR describ = '$des' OR pr_id = '$pr_id'";
      $user_check_result = mysqli_query($connection, $query);
      if (mysqli_num_rows($user_check_result) > 0) {
        $_SESION['add_pr'] = "Product already exist";
      }else {
        // check photo
        $time = time();
        $photo_name = $time .$photo ['name'];
        $photo_tmp_name = $photo['tmp_name'];
        $photo_description_path = 'images/'.$photo_name;

        //check if file is an image 
        $allowed_files = ['png','jpg','jpeg'];
        $extention = explode('.', $photo_name);
        $extention= end($extention);
        if (in_array($extention, $allowed_files)) {
            if ($photo['size'] < 2000000) {
               move_uploaded_file($photo_tmp_name, $photo_description_path);
            }else {
               $_SESION['add_pr'] = "File size too big, should be less than 2mb";
            }
        }else {
         $_SESSION['add_pr'] = "File should be png, jpg, or jpeg";
        }
      }
   }
   // if there's an error redirect to product page

   if (isset($_SESSION['add_pr'])) {
      $_SESION['add_pr_data'] = $_POST;
      header('header: ' . ROOT_URL. 'admin/products.php');
      die();
   }else{
      //if they're no error inser product
      $inser_product_query = "INSERT INTO products(primage,pr_id,prname,describ,prprice) VALUE('$photo_name','$pr_id', '$pr_name', '$des', '$pprice')";

      $inser_product_result = mysqli_query($connection, $inser_product_query);
      if (!mysqli_error($connection)) {
        //redirect to the product page
        $_SESION['product_add_success'] = "Product added successfully";

        header('location: ' .ROOT_URL. 'admin/products.php');
        die();
      }
   }
}else {
   //if button isn't click;
   header('location: ' . ROOT_URL . 'admin/products.php');
   die();
}