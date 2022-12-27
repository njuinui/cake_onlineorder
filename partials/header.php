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
    <link rel="stylesheet" href="<?= ROOT_URL ?>/../css/main.css" />
    <link rel="stylesheet" href="<?= ROOT_URL ?>/../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" />
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
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>           
            <li class="nav-item">
              <a href="blog.php" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
              <a href="order.php" class="nav-link">Order</a>
            </li>
            <li class="nav-item">
              <img src="images/<?php echo $s;?>" alt="HELLO" class="img-fluid rounded-circle" style="with:2.5rem; height:2.5rem;">
            </li>
            
            <li class="nav-item">
              <a href="user_dashboard.php" class=""><i class="fa-solid fa-cart-shopping text-white pt-2"></i></a>
            </li>
        <?php else : ?>
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
              <a href="register.php" class=""><button class="btn btn-warning text-white">Sign Up</button> </a>
            </li>
            <li class="nav-item">
              <a href="user_login.php" class=""><button class="btn btn-danger text-white">Sign In</button> </a>
            </li>

            <?php endif ?>  
      </ul>
    </div>
  </div>
</nav>