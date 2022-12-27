<?php 
   require 'configur/database.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);

?>

<!-- css link  -->
<link rel="stylesheet" href="<?= ROOT_URL ?>css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" />

<style>
    body{
        background-color: darkgray;
    }
</style>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 py-5 my-2">
                <div class="container">                    
                 <nav class="navbar navbar-expand-md navbar-dark bg-dark card-header p-3">
                        <a class="navbar-brand" href="<?= ROOT_URL ?>index.php"><i class="fas fa-home mr-2"></i>Online Cake Order</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="register.php"><i class="fas fa-user-plus mr-2"></i>Create An Account</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="user_login.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                            </li>                  
                        </ul>
                        </div>
                  </nav>
                 <div class="form bg-white">                    
                        <?php if (isset($_SESSION['signup-success'])) : ?> 
                            <section class="container py-3">
                                <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
                                    <?= $_SESSION['signup-success'];
                                        unset($_SESSION['signup-success']);
                                    ?>
                                </div>
                            </section>
                        <?php elseif (isset($_SESSION['signin'])) : ?>
                            <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
                                <?= $_SESSION['signin'];
                                    unset($_SESSION['signin']);
                                ?>
                            </div>                   
                        <?php endif ?> 
                    <h4 class="text-center bg-light p-3 ">Hello User</h4>
                    <form class="p-4" method="POST" action = "login_logic.php">
                        <div class="input-group">
                        <input type="text" name="username_email" class="form-control" id="uname" placeholder="Enter user name OR email">
                        </div><br>
                        <div class="input-group">   
                          <input type="password" name="password" class="form-control" id="password" placeholder="Enter user password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>

<script src="<?= ROOT_URL ?>js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.slim.min.js"></script>