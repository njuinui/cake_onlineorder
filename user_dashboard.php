<?php
  require 'configur/database.php';
?>  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"/>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css" />
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" /> -->
    <title>CAKE</title>
  </head>
  <body>
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
  <div class="container">
    <a href="#" class="navbar-brand text-danger text-center">AC</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
      <?php if (isset($_SESSION['success'])) :
            $id =  $_SESSION['user_id'];
             $user_check_query = "SELECT * FROM users WHERE  id=$id";
             $user_check_result = mysqli_query($connection, $user_check_query);
             $result =mysqli_fetch_assoc($user_check_result);
             $s = $result['photo'];
        ?>
        <li class="nav-item">
              <img src="images/<?php echo $s;?>" alt="HELLO" class="img-fluid rounded-circle" style="with:2.5rem; height:2.5rem;">
        </li>

        <li class="nav-item">
          <a href="logout.php" class=""><button class="btn btn-danger text-white" >Logout</button> </a>
        </li>
       

      <?php endif ?>  
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid ad_int">
    <div class="row ">
        <div class="col-lg-2 col-md-2 col-sm-12 dashboard__container">
          <!-- buttons for smaller devices -->
          <!-- <button class="sidebar__toggle" id="show__sidebar-btn"><i class="fa fa-right"></i></button>
          <button class="sidebar__toggle" id="hide__sidebar-btn"><i class="fa fa-right"></i></button> -->

            <aside class="bg-dark mt-5 asside">
               <ul class="ml-5 pt-5">
                <li>
                  <a href="index.php" class="d-flex pl-5 pt-4 active">
                    <i class="fa fa-bars mb-2"></i>
                    <h6>Dashboard</h6>
                  </a>
                </li>
                <li>
                  <a href="message.php" class="d-flex pl-5 pt-4">
                    <i class="fa fa-message"></i>
                    <h6>Message</h6>
                  </a>
                </li>                
               </ul> 
            </aside>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12">
          
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.slim.min.js"></script>