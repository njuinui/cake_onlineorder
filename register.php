<?php 
   require 'configur/database.php';

   //get back form data if there was a registration erroe
//if you're gettingg back any error used null

$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['password'] ?? null;
$confirmpassword = $_SESSION['signup-data']['cpassword'] ?? null;
$address = $_SESSION['signup-data']['address'] ?? null;
$phone = $_SESSION['signup-data']['phone'] ?? null;
$photo = $_SESSION['signup-data']['photo'] ?? null;

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
<div class="container-fluid register py-3">
    <div class="container b-1 py-2 my-2 align-items-center">              
        <div class="row">
            <div class="col-lg-3 co-md-12">

            </div>                 
                  
            <div class="col-lg-6 col-md-12">
              <div class="container">
                    <?php  if (isset($_SESSION[''])) : ?>

                    <?php endif ?>
                        <nav class="navbar navbar-expand-md navbar-dark bg-dark card-header p-3">
                            <a class="navbar-brand" href="<?= ROOT_URL ?>index.php"><i class="fas fa-home mr-2"></i>Online Cake Order </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active ">
                                    <a class="nav-link" href="register.php"><i class="fas fa-user-plus mr-2"></i>Create An Account</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="user_login.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                                </li>                  
                            </ul>
                            </div>
                        </nav>
                     <div class="form bg-white">
                            <?php if (isset($_SESSION['signup'])) : ?> 
                                <section class="container py-2">
                                    <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
                                        <?= $_SESSION['signup'];
                                            unset($_SESSION['signup']);
                                        ?>
                                    </div>

                                </section>
                            <?php endif ?> 
                        <h4 class="text-center form-register bg-light p-3">Create an account</h4>                          
                        <form class="row g-3 p-4" action="<?= ROOT_URL ?>register_logic.php" enctype="multipart/form-data" method="POST">
                        <div class="input-group">                            
                                <input type="text" name="firstname" class="form-control" id="fname" placeholder="Enter First Name" value = "<?= $firstname ?>"> 
                            </div><br>
                            <div class="input-group">
                                <input type="text" name="lastname" class="form-control" id="lname" placeholder="Enter Last Name" value = "<?= $lastname ?>">  
                            </div><br>
                            <div class="input-group">
                                <input type="text" name ="username" class="form-control" id="uname" placeholder="Enter User Name" value = "<?= $username ?>">
                            </div><br>
                            <div class="input-group">
                                <input type="email" name= "email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value = "<?= $email ?>">
                            </div><br>
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" value = "<?= $createpassword ?>">
                            </div><br>
                            <div class="input-group">
                                <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password" value = "<?= $confirmpassword ?>">
                            </div><br>
                            <div class="input-group">
                                 <input type="text" name="address" class="form-control" id="address" placeholder="Enter User Address" value = "<?= $address?>"> 
                            </div><br>
                            <div class="input-group">
                                 <input type="file" name="photo" class="form-control" id="user_photo" placeholder="Enter UserPhoto" value = "<?= $photo ?>">
                            </div><br>
                            <div class="input-group">
                                 <input type="tell" name="phone" class="form-control" id="phone" name="tell" placeholder="Enter Your phone number" value = "<?= $phone ?>">
                            </div>
                            <div class="input-group">
                                <button type="submit" class="btn btn-success my-3 btn-xs" name="submit">Register</button>
                            </div>
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