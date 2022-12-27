
<?php 
require 'partials/header.php'; 
//get back form data if there was a registration erroe
//if you're gettingg back any error used null

$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
$address = $_SESSION['signup-data']['address'] ?? null;
$photo = $_SESSION['signup-data']['photo'] ?? null;
$phone = $_SESSION['signup-data']['phone'] ?? null;

// delete signup data session
unset($_SESSION['signup-data']);





?>

<style>
    body{
        background-color: darkgray;
    }
</style>

<div class="container-fluid ad_int">
    <div class="row ">
        <div class="col-lg-2 col-md-2  dashboard__container">
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
        <div class="col-lg-10 col-md-10 col-sm-12 mt-5">
                         <div class="container boxes">
                            <?php if (isset($_SESSION['signup'])) : ?> 
                                <section class="container py-2">
                                    <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
                                        <?= $_SESSION['signup'];
                                            unset($_SESSION['signup']);
                                        ?>
                                    </div>
                                </section>
                            <?php elseif (isset($_SESSION['signup-success'])) :?>
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
                                        <?= $_SESSION['signup-success'];
                                            unset($_SESSION['signup-success']);
                                        ?>
                                        </div>
                                    </section>
                            <?php endif ?> 
                        <h4 class="text-center bg-light py-3">Add New user</h4>                          
                        <form class="row p-2" action="<?= ROOT_URL ?>add_user_logic.php" enctype="multipart/form-data" method="POST">
                            <div class="col-lg-6">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" name="firstname" class="form-control" id="fname" placeholder="Enter First Name" value = "<?= $firstname ?>"> 
                            </div>
                            <div class="col-lg-6">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="lname" placeholder="Enter Last Name" value = "<?= $lastname ?>">  
                            </div>
                            <div class="col-lg-6">
                                <label for="uname" class="form-label">User Name</label>
                                <input type="text" name ="username" class="form-control" id="uname" placeholder="Enter User Name" value = "<?= $username ?>">
                            </div>
                            <div class="col-lg-6">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name= "email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value = "<?= $email ?>">
                            </div>
                            <div class="col-lg-6">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" value = "<?= $createpassword ?>">
                            </div>
                            <div class="col-lg-6">
                                <label for="cpassword">Confirm Password</label>
                                <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password" value = "<?= $confirmpassword ?>">
                            </div>
                            <div class="col-lg-6">
                                <label for="addres">Address</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="Enter User Address" value = "<?= $address?>"> 
                            </div>
                            <div class="col-lg-6">
                                <label for="user_photo">Photo</label>
                                <input type="file" name="photo" class="form-control" id="user_photo" placeholder="Enter UserPhoto" value = "<?= $photo ?>">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tell" name="phone" class="form-control" id="phone" name="tell" placeholder="Enter Your phone number" value = "<?= $phone ?>">
                            </div>
                            <div class="col-8 my-2">
                                <button type="submit" class="btn btn-success " name="add-user">Add user</button>
                            </div>
                        </form>
          </div>
        </div>
    </div>
</div>


<!-- footer  -->

<?php 
require 'partials/footer.php'; 
?>