<?php
session_start();
require("config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
   
  </head>
  <body>

  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.php" class="js-logo-clone">Shoppers</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                <?php
                if(isset($_SESSION['username'])){
                ?>
                <li><span style="text-decoration: none;" class="mr-2 text-dark mb-2"><a href="userprofile.php"><?=$_SESSION['username']?></a></span></li>
                <?php
                }
                else{
                  ?>

                  <?php
                }
                if(isset($_SESSION['role'])){
                if($_SESSION['role']=='admin'){
                ?>
                <li><a href="adminpage.php" style="text-decoration: none;" class="mr-2 text-dark mb-2">Dashboard</a></li>
                <?php
                }
              }
                ?>
                <?php
                if(isset($_SESSION['username'])==null){


                  ?>
                  <li><button class= "btn" style="background-color: white;" onclick="login()"><span class="icon icon-person"></span></button></li>

                  <?php
                }
                else{
                  ?>
<li><button class= "btn" style="background-color: white;" ><span class="icon icon-person"></span></button></li>
                  <?php
                }
                ?>
                  
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.php" class="site-cart">
                      <span class="icon icon-shopping_cart" ></span>
                      <?php
                      if(isset($_SESSION['id'])!=null){
                      $q="SELECT COUNT(pid) from cart";
                      $result=mysqli_query($con,$q);
                      while($data=mysqli_fetch_assoc($result)){
                        ?>
                        <span class="count"><?=$data['COUNT(pid)']?></span>
                        <?php
                      }
                    }
                      ?>
                      
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                  <li class="d-inline-block d-md-none ml-md-0"><a href="logout.php" class="btn btn-info">Logout</a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <form action="logindb.php">
      <div class="modal" tabindex="-1" role="dialog" id="mymodal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login With Account</h5>
        </div>
        <div class="modal-body">
        <form action="" method="POST">
        <input type="text"  placeholder="Enter Your Email" name="email">
        </div>
        <div class="modal-body">
          <input type="password"  placeholder="Enter Your Password" name="password">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-dark" name="btn-login"> Submit</button>

        </div>
        </form>
      </div>
    </div>
  </div>
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="has-children active">
              <a href="index.php">Home</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
                <li class="has-children">
                  <a href="#">Sub Menu</a>
                  <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-children">
              <a href="about.html">About</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
              </ul>
            </li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="#">Catalogue</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
<!-- product description starts -->
<div class="container " >
      <div class="row d-flex justify-content-center">
        
            <?php
            require("config.php");
            $cat=$_GET['cat'];
            $q = "select * from product where pcategory = '$cat'";
            $result = mysqli_query($con,$q);
            while($data = mysqli_fetch_assoc($result)){
              ?>
              <div class="col-md-4" >
          <div class="card m-4" style="width: 20rem;" >
<img class="card-img-top" src="pimages/<?=$data['pimage']?>" width="300px" height="450px"  alt="Card image cap">
  <div class="card-body" style="height: 180px;">
    <h5 class="card-title text-dark mt-3 text-center" style="height: 60px;"><?=$data['pname']?></h5>
    <a href="productdesc.php?id=<?=$data['id']?> " class="btn btn-warning col-12 my-4">Detail</a>
  </div>
</div>

</div>
<?php
          }
          ?>
          
      </div>
      </div>
    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="images/hero_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Shoes</h3>
              <p>Promo from  nuary 15 &mdash; 25, 2019</p>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-warning" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-warning">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>
            <p id="temp"></p>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>
<script>
  function login(){
  $(document).ready(function () {
    
      $('#mymodal').show();
    
  })
}
</script>
<script>
  
  function upt_cart(pid,price){
    $.ajax(
      {
        url:'dbcart.php',
        method:'post',
        data:{
          btn:"btn-cart",
          qty:1,
          price:price,
          pid:pid,
          
          
        },
        success:function(value){
          alert(value);
        }
      },
    )

  }

</script>