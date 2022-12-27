<?php 
require 'partials/header.php'; 
?>

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
                  <a href="order.php" class="d-flex pl-5 pt-4">
                    <i class="fa fa-pen"></i>
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
        <div class="col-lg-10 col-md-10 col-sm-12">
          <div class="main mt-4">              
              <div class="row">
              <div class="container-fluid">
                <marquee class="bg-light"><div class="welcome d-flex py-5 ">
                  <h5 class=""><small>Welcome</small>
                    <?php if(isset($_SESSION['admin_success'])) : ?>           
                        <?= $_SESSION['admin_success'];
                         unset($_SESSION['admin_success']);
                         ?>
                         <p>December 10, 2022 09:30 AM</p>
                    <?php endif ?>
                    </h5>  
                  </div></marquee>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 boxeser">
                    <div class="bg-warning text-white p-2 box">
                      <h5 class="pl-2">
                        Revenue
                      </h5>
                      <p class="pl-2">Total Income</p>
                      <a href="" class="float-end m"><i class="fa fa-book text-white"></i></a href="">
                      <h4 class="pl-2 pt-3">
                        1,873,450 CFA
                      </h4>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 boxeser">
                    <div class="bg-info text-white p-2 box">
                      <h5 class="pl-2">
                        Order request
                      </h5>
                      <p class="pl-2">Nuumber of request</p>
                      <a href="" class="float-end m"><i class="fa fa-pen text-white"></i></a href="">
                      <h4 class="pl-2 pt-3">
                        150 orders
                      </h4>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 boxeser">
                    <div class="bg-success text-white p-2 box">
                      <h5 class="pl-2">
                        Order approved
                      </h5>
                      <p class="pl-2">Number of order approved</p>
                      <a href="" class="float-end m"><i class="fa fa-user text-white"></i></a href="">
                      <h4 class="pl-2 pt-3">
                       100 approved
                      </h4>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 boxeser">
                    <div class="bg-danger text-white p-2 box">
                      <h5 class="pl-2">
                        Suggetion box
                      </h5>
                      <p class="pl-2">Number of suggetion</p>
                      <a href="" class="float-end m"><i class="fa fa-message text-white"></i></a href="">
                      <h4 class="pl-2 pt-3">
                        25 suggetion
                      </h4>
                    </div>
                  </div>
              </div>

              <div class="row mt-4">
                <div class="col-lg-8 col-sm-12">
                  <div class="container boxes">
                    <h6>Recent Order</h6>
                    <table class="table table-hover main-table">
                      <thead>
                        <tr>
                          <th>
                            Order_ID                            
                          </th>
                          <th> Product_ID</th>
                          <th>Delivery Date</th>
                          <th class="span-2">Status</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>ANJEOO1</td>
                          <td>BDC123456</td>
                          <td>Sat, DEC 14 2022</td>
                          <td class="approve text-info">Approved</td>
                          <td class="text-dark">Details</td>
                        </tr>
                        <tr>
                          <td>ANJEOO1</td>
                          <td>BDC123456</td>
                          <td>Sat, DEC 14 2022</td>
                          <td class=" approve text-danger">Declain</td>
                          <td class="text-dark">Details</td>
                        </tr>
                        <tr>
                          <td>ANJEOO1</td>
                          <td>BDC123456</td>
                          <td>Sat, DEC 14 2022</td>
                          <td class="approve text-success">Delivered</td>
                          <td class="text-dark">Details</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                  <div class="container boxes">
                    <h6 class="mb-3 pt-3">Update</h6>
                    <div class="user-order d-flex mb-3">
                      <img src="../images/des.jpg" alt="" class="img-fluid rounded-circle">
                      <p><b>Fonguong Desmond</b> order birthday cake 45minutes ago</p>
                    </div>
                    <div class="user-order d-flex mb-3">
                      <img src="../images/des.jpg" alt="" class="img-fluid rounded-circle">
                      <p><b>Fonguong Desmond</b> order Wedding cake 1hr ago</p>
                    </div>
                    <div class="user-order d-flex mb-3">
                      <img src="../images/des.jpg" alt="" class="img-fluid rounded-circle">
                      <p><b>Fonguong Desmond</b> order Graduaion cake 2hrs ago</p>
                    </div>
                    <div class="user-order d-flex mb-3">
                      <img src="../images/des.jpg" alt="" class="img-fluid rounded-circle">
                      <p><b>Fonguong Desmond</b> order birthday cake 45minutes ago</p>
                    </div>
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