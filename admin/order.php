<?php 
require 'partials/header.php'; 
?>

<div class="container-fluid ad_int">
    <div class="row ">
      <div class="col-lg-2 col-md-2 col-sm-12 dashboard__container">

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
                  <a href="order.php" class="d-flex pl-5 pt-4 mt-3  active">
                    <i class="fa fa-pen mb-2"></i>
                    <h6>Order</h6>
                  </a>
                </li>
                <li>
                  <a href="products.php" class="d-flex pl-5 pt-4">
                    <i class="fa fa-pen"></i>
                    <h6>Products</h6>
                  </a>
                </li>
                <li>
                  <a href="users.php" class="d-flex pl-5 pt-4">
                    <i class="fa fa-users"></i>
                    <h6>Customers</h6>
                  </a>
                </li>
                <li>
                  <a href="analysis.php" class="d-flex pl-5 pt-4">
                    <i class="fa fa-book"></i>
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
      <div class="col-lg-10 col-md-10 col-sm-12 mt-5">
          <div class="main mt-4"> 
            
            <div class="container-fluid">
                <marquee class="bg-light"><h5><center>Admin the following people has order for cake</center></h5> </marquee>
              </div>

              <?php
                $fetch_user_query = "SELECT * FROM orderCake";
                $fetch_user_result = mysqli_query($connection, $fetch_user_query);

                if (mysqli_num_rows($fetch_user_result) > 0) {

                ?>
              <div class="row mt-4">
                <div class="col-lg-12 col-sm-12">
                  <div class="container-fluid boxes">
                    <h5 class="pt-2">Cake Order</h5>
                    <table class="table table-hover main-table">
                      <thead>
                        <tr>
                          <th> Product ID</th>
                          <th>Product Image </th>
                          <th>Person Name </th>
                          <th>Quantity </th>
                          <th>Order Date </th>
                          <th>Delivery Date </th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>
                        <?php
                         $i = 0;
                         while ($row = mysqli_fetch_assoc($fetch_user_result)) {
                        
                        ?>
                      <tbody>
                        <tr>
                          <td><?= $row['pr_id'] ; ?></td>
                          <td><?= $row['pr-image'] ; ?></td>
                          <td><?= $row['ps-name'] ; ?></td>
                          <td><?= $row['quantity'] ; ?></td>
                          <td><?= $row['od-date'] ; ?></td>
                          <td><?= $row['dl-date'] ; ?></td>
                          <td>
                            <a href="" class="btn btn-info">Approve</a>
                            <a href="" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                      </tbody>
                        <?php
                        $i++;
                         }
                         ?>
                    </table>                    
                    <?php
                      }
                      else {
                        echo 'No Order';
                      }
                    ?>
                  </div>
                </div>               
              </div>
          </div>
        </div>
    </div>
</div>

<?php 
require 'partials/footer.php'; 
?>