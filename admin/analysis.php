<?php 
require 'partials/header.php'; 
?>

<div class="container-fluid ad_int">
    <div class="row ">
        <div class="col-lg-2 col-md-2 col-sm-12 dashboard__container">
          <!-- buttons for smaller devices -->
          <button class="sidebar__toggle" id="show__sidebar-btn"><i class="fa fa-right"></i></button>
          <button class="sidebar__toggle" id="hide__sidebar-btn"><i class="fa fa-right"></i></button>

          <aside class="bg-dark mt-5 asside">
            <ul class="ml-5 pt-3">
            <li>
              <a href="index.php" class="d-flex pl-5 pt-4">
                <i class="fa fa-bars"></i>
                <h6>Dashboard</h6>
              </a>
            </li>
            <li>
              <a href="order.php" class="d-flex pl-5 pt-4">
                <i class="fa fa-pen"></i>
                <h6>Order</h6>
              </a>
            </li>
            <li>
              <a href="products.php" class="d-flex pl-5 pt-4">
                <i class="fa fa-pen"></i>
                <h6>Prodcts</h6>
              </a>
            </li>
            <li>
              <a href="users.php" class="d-flex pl-5 pt-4 ">
                <i class="fa fa-users"></i>
                <h6>Customers</h6>
              </a>
            </li>
            <li>
              <a href="analysis.php" class="d-flex pl-5 pt-4 mt-3 active">
                <i class="fa fa-book mb-2"></i>
                <h6>Analysis</h6>
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

<?php 
require 'partials/footer.php'; 
?>