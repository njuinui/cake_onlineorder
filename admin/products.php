
<?php 
require 'partials/header.php'; 
?>

<div class="container-fluid ad_int">
    <div class="row ">
        <div class="col-lg-2 col-md-2  dashboard__container">

          <button class="sidebar__toggle" id="show__sidebar-btn"><i class="fa fa-right"></i> </button>
          <button class="sidebar__toggle" id="hide__sidebar-btn"><i class="fa fa-right"></i> </button>

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
              <a href="products.php" class="d-flex pl-5 pt-4  mt-3 active">
                <i class="fa fa-pen mb-2"></i>
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
          <div class="main main-user mt-4"> 
              <div class="row mt-4">
                  <div class="container-fluid">
                    <div class="col-lg-10 align-items-center">
                         <!-- Button trigger modal -->
                          <div class="containern boxes p-4">
                          <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  Add Product
                          </button>
                          <?php
                              if (isset($_SESSION['add_pr'])) : ?>

                                <section class="container py-2">
                                    <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
                                        <?= $_SESSION['add_pr'];
                                            unset($_SESSION['add_pr']);
                                        ?>
                                    </div>
                                </section>

                          <?php elseif (isset($SESSION['product_add_success'])) : ?>
                            <section class="container py-2">
                                    <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
                                        <?= $_SESSION['product_add_success'];
                                            unset($_SESSION['product_add_success']);
                                        ?>
                                    </div>
                                </section>


                          <?php endif ?>  
                              <div class="d-md-flex justify-content-between align-items-center ">
                                  <div class="input-group news-input">
                                    <input type="text" class="form-control" placeholder="Search product here" />
                                    <button class="btn btn-success btn-md" type="button">Search</button>
                                </div>
                              </div>
                              <?php

                                 $query = "SELECT * FROM products";
                                 $fetch_product = mysqli_query($connection, $query);
                                 if (mysqli_num_rows($fetch_product) > 0) {

                                  ?>
                            <table class="table table-hover main-table">
                              <thead>
                                <tr>
                                  <th>Product ID</th>
                                  <th> Product Image</th>
                                  <th>Product Name </th>                    
                                  <th>Description</th>                    
                                  <th class="span-2">Action</th>
                                </tr>
                              </thead>
                                  
                              <?php
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($fetch_product)) {
                                 ?>
                              <tbody>
                                <tr>
                                  <td><?= $row['pr_id'];?></td>
                                  <td><img src="../images/<?= $row['primage']; ?>" alt="" class="img-fluid "></td>
                                  <td><?= $row['prname'];?></td>
                                  <td><?= $row['describ']; ?></td>
                                  <td>
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <a href="" class="btn btn-info">Detail</a>
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
                                  echo "No Product Added";
                                 }
                            ?>     
                          </div>
                      </div>                              
                    </div>              
              </div>
          </div>
        </div>
    </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            

                      <div class="col-lg-12">
                        <div class="container boxes py-2">
                           <form class="row g-2 p-4" action="<?= ROOT_URL ?>add_product.php" enctype="multipart/form-data" method="POST">
                                    <div class="form-group">
                                        <label for="fname" class="form-label">Product Name</label>
                                        <input type="text" name="pr_name" class="form-control" id="fname" placeholder="Enter First Name" value = ""> 
                                    </div>
                                    <div class="form-group">
                                        <label for="fname" class="form-label">Product ID</label>
                                        <input type="text" name="pr_id" class="form-control" id="fname" placeholder="Enter Product ID" value = ""> 
                                    </div>
                                    <div class="form-group">
                                        <label for="lname" class="form-label">Description</label>
                                        <input type="text" name="desc" class="form-control" id="lname" placeholder="Describ product" value = "">  
                                    </div>
                                    <div class="form-group">
                                        <label for="lname" class="form-label">Product Price</label>
                                        <input type="number" name="prprice" class="form-control" id="lname" placeholder="Enter Product price" value = "">  
                                    </div>
                                    <div class="form-group">
                                        <label for="user_photo">Product image</label>
                                        <input type="file" name="photo" class="form-control" id="user_photo" placeholder="Enter UserPhoto" value = "<?= $photo ?>">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success mb-3 mt-3" name="add_product">Add Product</button>
                                    </div>
                           </form>  
                        </div>

                      </div>
                      </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div >


<!-- footer  -->

<?php 
require 'partials/footer.php'; 
?>