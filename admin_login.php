<?php 
  require 'configur/constants.php';

?>

<link rel="stylesheet" href="<?= ROOT_URL ?> ../../css/bootstrap.min.css">

<style>
  body{
    background-color: darkgray;
  }
</style>

<div class="container-fluid py-5">
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 bg-white py-4">
            <?php if (isset($_SESSION['admin-login'])) : ?> 
                <section class="container">
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
                         <?= $_SESSION['admin-login'];
                            unset($_SESSION['admin-login']);
                          ?>
                    </div>

                </section>
            <?php endif ?> 
                <a href="<?= ROOT_URL ?>index.php" class="text-white fw-b bg-dark"></i>Home</a>           
                 <h4 class="text-center py-3">Hello Admin</h4>
                <form class="pt-2 pb-3" action ="<?= ROOT_URL ?>admin-logic.php" method="POST">
                    <div class="form-group">
                      <label for="number">IDNumber</label>
                      <input type="text" name="adminID" class="form-control" id="number" aria-describedby="emailHelp" placeholder="Enter IDnumber">
                    </div>
                    <div class="form-group">
                      <label for="uname">User Name</label>
                      <input type="text" name="admin_name" class="form-control" id="uname" placeholder="User name">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                  </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>

<!-- LOGIN MODAL  -->
