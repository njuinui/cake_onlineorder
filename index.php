

  <?php 
   require 'partials/header.php';

  ?>
  
    <!-- Showcase -->
    <section class="bg-light text-dark p-5 p-lg-0 pt-lg-5 pt-md-5 pt-sm-5 text-md-center mt-lg-5 mt-md-5 pt-sm-5 text-sm-center text-lg-center hero">
            
    <div class="container-fluid p-2">
            <?php if (isset($_SESSION['signup-success'])) : ?>
              <marquee class="mt-1">
                 <strong><?= $_SESSION['signup-success'] ; ?></strong>
              </marquee>
            <?php else : ?>
              <marquee class="mt-1">
                 <strong>Create an account to enable you order your favourite cake and event exploire our blog page</strong>
              </marquee>

              <?php endif ?>  
    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Order Your Cake Now</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <h6>
                             Create an acount to enable you order your cake.<br>
                             If you've have an account already then login
                            </h6>
                            <div class=" py-4">
                              <a href="<?= ROOT_URL ?>register.php" class="btn btn-warning text-white">Register</a>
                              <a href="<?= ROOT_URL ?>user_login.php" class="btn btn-danger text-white flex-end">Login Now</a>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div >
            
      <div class="container">
        <div class="align-items-center justify-content-between">
          <div>
            <h1 class="text-danger mt-lg-5 pt-lg-5  mt-md-3 mt-sm-5">FAST AND RELIABLE ONLINE <br> CAKE DELIVERY </h1>
            <p class="text-danger lead my-4">
              Create an count in other to place your order
            </p>
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-warning align-items-center my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     Order Now
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Newsletter -->
    <section class="news-letter text-light p-5">
      <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
          <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>
          <div class="input-group news-input">
            <input type="text" class="form-control" placeholder="Enter Email" />
            <button class="btn btn-success btn-lg" type="button">Submit</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Boxes -->
  

    <!-- OUR POPULAR CAKE -->
  <section class="container-fluid popular">
      <div class="container main_section">
        <div class="text-center pt-4">          
          <h2>OUR POPULAR CAKES</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum, beatae.</p>
          </div>
          <div class="row popular-cake">
              <div class="col-lg-2 col-md-4 col-sm-12 mt-3">
                  <img class="img-fluid" src="images/1.jpg" alt="" width="" height="305">
                  <i class="fa-solid fa-thumbs-up text-info pl-5 ml-5"></i><span class="rounded-circle mb-3 text-info">40</span>
                  <i class="fa-solid fa-heart text-danger pl-2"></i><span class="rounded-circle mb-3  text-danger">55</span>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12 mt-3">
                  <img class="img-fluid" src="images/2.jpg" alt="" width="" height="305">
                  <i class="fa-solid fa-thumbs-up text-info pl-5 ml-5"></i><span class="rounded-circle mb-3 text-info">40</span>
                  <i class="fa-solid fa-heart text-danger pl-2"></i><span class="rounded-circle mb-3  text-danger">55</span>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12 mt-3">
                  <img class="img-fluid" src="images/3.jpg" alt="" width="" height="305">
                  <i class="fa-solid fa-thumbs-up text-info pl-5 ml-5"></i><span class="rounded-circle mb-3 text-info">40</span>
                  <i class="fa-solid fa-heart text-danger pl-2"></i><span class="rounded-circle mb-3  text-danger">55</span>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12 mt-3">
                  <img class="img-fluid" src="images/4.jpg" alt="" width="" height="305">
                  <i class="fa-solid fa-thumbs-up text-info pl-5 ml-5"></i><span class="rounded-circle mb-3 text-info">40</span>
                  <i class="fa-solid fa-heart text-danger pl-2"></i><span class="rounded-circle mb-3  text-danger">55</span>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12 mt-3">
                  <img class="img-fluid" src="images/6.jpg" alt="" width="" height="305">
                  <i class="fa-solid fa-thumbs-up text-info pl-5 ml-5"></i><span class="rounded-circle mb-3 text-info">40</span>
                  <i class="fa-solid fa-heart text-danger pl-2"></i><span class="rounded-circle mb-3  text-danger">55</span>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12 mt-3">
                  <img class="img-fluid" src="images/7.jpg" alt="" width="" height="305">
                  <i class="fa-solid fa-thumbs-up text-info pl-5 ml-5"></i><span class="rounded-circle mb-3 text-info">40</span>
                  <i class="fa-solid fa-heart text-danger pl-2"></i><span class="rounded-circle mb-3  text-danger">55</span>
              </div>
          </div>
          <div class="row popular-cake">
              <div class="col-lg-2 col-md-4 col-sm-12 mt-3">
                  <img class="img-fluid" src="images/1.jpg" alt="" >
                  <i class="fa-solid fa-thumbs-up text-info pl-5 ml-5"></i><span class="rounded-circle mb-3 text-info">40</span>
                  <i class="fa-solid fa-heart text-danger pl-2"></i><span class="rounded-circle mb-3  text-danger">55</span>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12 mt-3">
                  <img class="img-fluid" src="images/2.jpg" alt="" width="" height="305">
                  <i class="fa-solid fa-thumbs-up text-info pl-5 ml-5"></i><span class="rounded-circle mb-3 text-info">40</span>
                  <i class="fa-solid fa-heart text-danger pl-2"></i><span class="rounded-circle mb-3  text-danger">55</span>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12 mt-3">
                  <img class="img-fluid" src="images/3.jpg" alt="" width="" height="305">
                  <i class="fa-solid fa-thumbs-up text-info pl-5 ml-5"></i><span class="rounded-circle mb-3 text-info">40</span>
                  <i class="fa-solid fa-heart text-danger pl-2"></i><span class="rounded-circle mb-3  text-danger">55</span>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12 mt-3">
                  <img class="img-fluid" src="images/4.jpg" alt="" width="" height="305">
                  <i class="fa-solid fa-thumbs-up text-info pl-5 ml-5"></i><span class="rounded-circle mb-3 text-info">40</span>
                  <i class="fa-solid fa-heart text-danger pl-2"></i><span class="rounded-circle mb-3  text-danger">55</span>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12 mt-3">
                  <img class="img-fluid" src="images/6.jpg" alt="" width="" height="305">
                  <i class="fa-solid fa-thumbs-up text-info pl-5 ml-5"></i><span class="rounded-circle mb-3 text-info">40</span>
                  <i class="fa-solid fa-heart text-danger pl-2"></i><span class="rounded-circle mb-3  text-danger">55</span>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12 mt-3 ">
                  <img class="img-fluid" src="images/7.jpg" alt="" width="" height="305">
                  <i class="fa-solid fa-thumbs-up text-info pl-5 ml-5"></i><span class="rounded-circle mb-3 text-info">40</span>
                  <i class="fa-solid fa-heart text-danger pl-2"></i><span class="rounded-circle mb-3  text-danger">55</span>
              </div>
          </div>
          <div class="see_more-btn">
            <button class="btn ">See More</button>
          </div>
      </div>
           
  </section>

      <!-- Test and testify section -->
<section class="container-fluid test">
        <h2 class="text-center pt-4">TASTE OUR CAKE</h2>
        <div class="container">
            <div class="row justify-content-space-between">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                    <div class="card" >
                      <img src="images/1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p>20,000 FRS <br> <span class="not">22,000 FRS</span></p>
                          <a href="order.php" class="add_to-cart bg-white"><i class="fa-solid fa-cart-shopping text-success"></i></a>
                      </div>
                    </div>
                </div> 

                <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                  <div class="card" >
                    <img src="images/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p>20,000 FRS <br> <span class="not">22,000 FRS</span></p>
                            <a href="order.php" class="add_to-cart bg-white"><i class="fa-solid fa-cart-shopping text-success"></i></a>
                    </div>
                  </div>
                </div> 

                <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                  <div class="card" >
                    <img src="images/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p>20,000 FRS <br> <span class="not">22,000 FRS</span></p>
                            <a href="order.php" class="add_to-cart bg-white justify-content-center"><i class="fa-solid fa-cart-shopping text-success"></i></a>
                    </div>
                  </div>
                </div> 
                               
                <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                  <div class="card" >
                    <img src="images/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p>20,000 FRS <br> <span class="not">22,000 FRS</span></p>
                        <a href="order.php" class="add_to-cart bg-white"><i class="fa-solid fa-cart-shopping text-success"></i></a>
                    </div>
                  </div>
                </div>                
            </div>
        </div>
        <div class="see_more-btn ">
            <button class="btn mb-3 mt-3">See More</button>
         </div>
</section>

<!-- TESTIMONIALS -->

<div id="instructors" class="p-5 container-fluid">
  <div class="container mb-4 justify-content-center" >
    <h2 class="text-center text-dark">WHAT OUR CUSTOMERS SAY ABOUT US</h2>
    <p class="lead text-center text-dark mb-5">
      Our customers can testify how awesome, reliable, fast and secure our site is!!
    </p>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6"></div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="card justify-content-center" >
                <img src="images/des.jpg" class="rounded-circle mb-3  img " alt="...">
                <div class="card-body">
                  <h3 class="card-title mb-3 text-center"><span class="h3">Jane Doe</span></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="card justify-content-center" >
                <img src="images/des.jpg" class="rounded-circle mb-3  img " alt="...">
                <div class="card-body">
                  <h3 class="card-title mb-3 text-center"><span class="h3">Jane Doe</span></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6"></div>
          </div>
          <!-- <div class="row g-4">
            <div class="col-sm-12 col-md-4 col-lg-2">
              <div class="card justify-content-center" >
                <img src="images/des.jpg" class="rounded-circle mb-3  img " alt="...">
                <div class="card-body">
                  <h3 class="card-title mb-3 text-center"><span class="h3">Jane Doe</span></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-2">
              <div class="card justify-content-center" >
                <img src="images/des.jpg" class="rounded-circle mb-3  img " alt="...">
                <div class="card-body">
                  <h3 class="card-title mb-3 text-center"><span class="h3">Jane Doe</span></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-2">
              <div class="card justify-content-center" >
                <img src="images/des.jpg" class="rounded-circle mb-3  img " alt="...">
                <div class="card-body">
                  <h3 class="card-title mb-3 text-center"><span class="h3">Jane Doe</span></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-2">
              <div class="card justify-content-center" >
                <img src="images/des.jpg" class="rounded-circle mb-3  img " alt="...">
                <div class="card-body">
                  <h3 class="card-title mb-3 text-center"><span class="h3">Jane Doe</span></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-2">
              <div class="card justify-content-center" >
                <img src="images/des.jpg" class="rounded-circle mb-3  img " alt="...">
                <div class="card-body">
                  <h3 class="card-title mb-3 text-center"><span class="h3">Jane Doe</span></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-2">
              <div class="card justify-content-center" >
                <img src="images/des.jpg" class="rounded-circle mb-3  img " alt="...">
                <div class="card-body">
                  <h3 class="card-title mb-3 text-center"><span class="h3">Jane Doe</span></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed 
                  </p>
                </div>
              </div>
            </div>          
        </div> -->
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6"></div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="card justify-content-center" >
                <img src="images/des.jpg" class="rounded-circle mb-3  img " alt="...">
                <div class="card-body">
                  <h3 class="card-title mb-3 text-center"><span class="h3">Jane Doe</span></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="card justify-content-center" >
                <img src="images/des.jpg" class="rounded-circle mb-3  img " alt="...">
                <div class="card-body">
                  <h3 class="card-title mb-3 text-center"><span class="h3">Jane Doe</span></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6"></div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6"></div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="card justify-content-center" >
                <img src="images/des.jpg" class="rounded-circle mb-3  img " alt="...">
                <div class="card-body">
                  <h3 class="card-title mb-3 text-center"><span class="h3">Jane Doe</span></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="card justify-content-center" >
                <img src="images/des.jpg" class="rounded-circle mb-3  img " alt="...">
                <div class="card-body">
                  <h3 class="card-title mb-3 text-center"><span class="h3">Jane Doe</span></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- LOGIN MODAL  -->
    <div class="modal fade" id="register" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-primary mt-2 text-center" id="modal-title"></h5>
                  <button class="btn-close btn btn-danger" type="button" data-bs-dismiss="modal" aria-label="close"></button>
              </div>
              <div class="modal-body">
                  <div class="row">        
                      <div class="col-sm-12 col-md-6 col-lg-6">
                          <button class="btn btn-success"><a href="user_login.html" class="text-white">User Login</a></button>
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-6">
                           <button class="btn btn-danger"><a href="admin_login.html" class="text-white">Admin Login</a></button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>


    <!-- Footer -->
<?php 
   require 'partials/footer.php';

?>
    