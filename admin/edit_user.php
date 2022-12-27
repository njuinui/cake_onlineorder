<?php

require 'partials/header.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);
}else {
    header('location: ' . ROOT_URL . 'admin/users.php');
    die();
}

?>



<div class="container">
   
                  <h4 class="text-center bg-light p-3">Edit user</h4>                          
                        <form class="row g-3 p-4" action="<?= ROOT_URL ?>admin/edit_user_logic.php" enctype="multipart/form-data" method="POST">                                                     
                            <input name="id" type="hidden" class="form-control" value= "<?= $user['id'] ?>">                             
                            <label for="fname" class="form-label">First name</label>
                            <input type="text" name="firstname" class="form-control" id="fname" placeholder="Enter First Name" value = "<?= $user['fname'] ?>"> 
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" name="lastname" class="form-control" id="lname" placeholder="Enter Last Name" value = "<?= $user['lname'] ?>">  
                            <label for="uname" class="form-label">User Name</label>
                            <input type="text" name ="username" class="form-control" id="uname" placeholder="Enter User Name" value = "<?= $user['uname'] ?>">
                           <div class="col-lg-3">
                              <button type="submit" class="btn btn-success mb-3 mt-3" name="edit-user">Edit user</button>
                           </div>
                      </form>
  
</div>