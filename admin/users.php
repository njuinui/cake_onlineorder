
<?php 
require 'partials/header.php'; 


?>

<div class="container-fluid ad_int">
    <div class="row ">
        <div class="col-lg-2 col-md-2  dashboard__container">
<!-- 
          <button class="sidebar__toggle" id="show__sidebar-btn"><i class="fa fa-right"></i> </button>
          <button class="sidebar__toggle" id="hide__sidebar-btn"><i class="fa fa-right"></i> </button> -->

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
                <h6>Products</h6>
              </a>
            </li>
            <li>
              <a href="users.php" class="d-flex pl-5 pt-4  mt-3 active">
                <i class="fa fa-users mb-2"></i>
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
        <div class="col-lg-10 col-md-10 col-sm-12 my-5">
          <div class="main main-user my-4">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-10">
                  <div class="container-fluid boxes">
                    <a href="add-user.php"><button class="btn btn-success m-2 p-1">Add New User</button></a>
                    <div class="containern py-4">
                      <div class="d-md-flex justify-content-between align-items-center">
                          <div class="input-group news-input">
                          <input type="text" class="form-control" placeholder="Search user here" />
                          <button class="btn btn-success btn-lg" type="button">Search</button>
                        </div>
                      </div>
                    </div>

                    <?php if (isset($_SESSION['signup-success'])) : // show if added user was successful ?> 

                                <section class="container py-2">
                                    <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
                                        <?= $_SESSION['signup-success'];
                                            unset($_SESSION['signup-success']);
                                        ?>
                                    </div>
                                </section>

                    <?php elseif(isset($_SESSION['edit_user_success'])) : // show if edited user was successful ?>
                                <section class="container py-2">
                                              <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
                                        <?= $_SESSION['edit_user_success'];
                                            unset($_SESSION['edit_user_success']);
                                        ?>
                                    </div>
                                </section>
                    <?php elseif(isset($_SESSION['edit_user'])) : // show if edited user was not successful ?>
                               <section class="container py-2">
                                    <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
                                        <?= $_SESSION['edit_user'];
                                            unset($_SESSION['edit_user']);
                                        ?>
                                    </div>
                                </section>
                    <?php endif ?>  

                    <h5 class="pt-2">The user of the system</h5>

                      <?php                       
                                            
                      $fetch_user_query = "SELECT * FROM users";
                      $fetch_user_reault = mysqli_query($connection,$fetch_user_query);

                      if (mysqli_num_rows($fetch_user_reault) > 0) {
                       
                      ?>

                    <table class="table table-hover main-table">
                      <thead>
                        <tr>
                          <th> Profile</th>
                          <th>Full name </th>
                          <th>Email </th>
                          <th>Address </th>                         
                          <th class="span-2">Action</th>
                        </tr>
                      </thead>
                      
                        <?php
                          $i=0;
                          while ($row = mysqli_fetch_assoc($fetch_user_reault)) {
                        ?>
                        <tbody>  
                          <tr>
                            <td><img src="../images/<?php echo $row['photo'];?>" class="img-fluid"></td>
                            <td><?= "{$row['fname']} {$row['lname']} {$row['uname']}";?></td>
                            <td><?= $row["email"]; ?></td>
                            <td><?= $row["address"]; ?></td>                          
                            <td><a href="<?= ROOT_URL ?>admin/edit_user.php?id=<?= $row['id']; ?>" class="text-white btn btn-success py-2">Edit</a></td>
                            <td><button class="btn btn-secondary"><a href="detail.php" class="text-white">Details</a></button></td>
                            <td><a href="<?= ROOT_URL ?>admin/edit_user.php?id=<?= $row['id']; ?>" class="text-white btn btn-danger py-2">Delete</a></td>
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
                        echo "No result found";
                      }
                    ?>  
                  </div>  
                  </div>
                  <div class="col-lg-2"></div>
          </div>
           </div>
          </div>
        </div>
    </div>
</div>


<!-- footer  -->

<?php 
require 'partials/footer.php'; 
?>