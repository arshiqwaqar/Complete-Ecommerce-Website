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
                
                    if(isset($_SESSION['username'])==null){

                      ?>
                      <li><a href="#" id="uname"></a></li>
                  
                      <?php
                    }
                    else{
                      ?>
                  <li><a href="#"><?=$_SESSION['username']?></a></li>
                  
                      <?php

                    }
                  
                    ?>
                
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.php" class="site-cart" id="btn-cartload">
                      <span class="icon icon-shopping_cart"></span>
                      <?php
                      if(isset($_SESSION['id'])!=null){
                      $q="SELECT COUNT(pid) from cart";
                      $result=mysqli_query($con,$q);
                      while($data=mysqli_fetch_assoc($result)){
                        ?>
                        <span class="count bg-warning"><?=$data['COUNT(pid)']?></span>
                        <?php
                      }
                    }
                      ?>
                      
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
     
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
          <button type="submit" class="btn btn-dark" name="btn-login">Submit</button>

        </div>
        </form>
      </div>
    </div>
  </div>
     
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="has-children">
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

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th> 
                    <th class="product-remove">Remove</th>
                    <!-- <th>Update</th> -->
                  </tr>
                </thead>
                <tbody id="cart">
                  <?php
                
            if(isset($_SESSION['id']))    {
              $id = $_SESSION['id'];
$q = "select product.id,product.pname,product.pimage,cart.qty,cart.price,cart.total from product inner join cart on  product.id=cart.pid where cid =$id;";

$result = mysqli_query($con,$q);

while($data = mysqli_fetch_assoc($result)){
  ?>
<tr>
<td class='product-thumbnail'>
  <img src='pimages/<?=$data['pimage']?>' alt='Image' class='img-fluid'>
</td>
<td class='product-name'>
  <h2 class='h5 text-black'><?=$data['pname']?></h2>
</td>
<td ><span id='qty_price' class="h4"><?=$data['price']?></span></td>
<td>
  <div class='input-group mb-3' style='max-width: 120px;'>
    <div class='input-group-prepend'>
    <h6 class='m-4 h4'><?=$data['qty']?></h6>
    </div>
  </div>

</td>
<td>
  <div class='input-group mb-3' style='max-width: 120px;'>
    <div class='input-group-prepend'>
    <h6 class='m-4 h4'><?=$data['total']?></h6>
    </div>
  </div>

</td>
<td>
  
    <button class="btn btn-danger col-12" name="btn-delete" onclick="deletee('<?=$data['id']?>')">X</button>
 

</td>
</tr>
<?php
} 
}
     ?>             
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-warning btn-sm btn-block">Update Cart</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-warning btn-sm btn-block">Continue Shopping</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-warning btn-sm">Apply Coupon</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <?php
                  if(isset($_SESSION['id'])!=null){
                  $q="select * from cart where cid=$id";
                  $result=mysqli_query($con,$q);
                  while($data = mysqli_fetch_assoc($result)){
                  ?>
                  <div class="col-md-12 text-right">
                    <strong class="text-black"><?=$data['total']?></strong>
                    
                  </div>
                  <?php
                  }
                }
                  ?>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <?php
                  if(isset($_SESSION['id'])!=null){
                  $q="SELECT SUM(total) from cart where cid=$id";
                  $result=mysqli_query($con,$q);
                  while($data = mysqli_fetch_assoc($result)){
                    
                  ?>
                  <div class="col-md-6 text-right">
                  <strong class="text-black"><?=$data['SUM(total)']?></strong>
                </div>
                  <?php
                  }
                }
                  ?>
                  
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <?php
                    
                    if(isset($_SESSION['username'])==null){

                      ?>
                  <button class="btn btn-warning btn-lg py-3 btn-block" type="submit" name="btn-proceed" onclick="login()">Proceed To Checkout</button>

                      <?php
                    }
                    else{
                      ?>
                  <button class="btn btn-warning btn-lg py-3 btn-block" type="submit" name="btn-proceed" ><a href="checkout.php" class="text-dark">Proceed To Checkout</a></button>

                      <?php

                    }
                  
                    ?>
                  
                  <!-- <button class="btn btn-warning btn-lg py-3 btn-block" type="submit" name="btn-proceed" onclick="login()">Proceed To Checkout</button> -->

                  
                  <!-- <button class="btn btn-warning btn-lg py-3 btn-block" onclick="login()" type="submit">Proceed To Checkout</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
             
          </div>
          
        </div>
      </div>
    </footer>
  </div>

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
  function deletee(name){
  $.ajax({
    url:'delete.php',
    method:'POST',
    data:{
      btn:"btn-delete",
      pname:name,
    },
    success :function(value){
      window.location.href='cart.php';
    }
    
  })
}
</script>
<script>
  var gname = localStorage.getItem('username');
        document.getElementById('uname').innerHTML = gname;
        
</script>
<?php
    if(isset($_POST['btn-login'])){
        extract($_POST);
        $q="select*from uaccount where email='$email' and password='$password'";
        $result= mysqli_query($con,$q);
        if(mysqli_num_rows($result)>0){
        while($data = mysqli_fetch_assoc($result)){
          $_SESSION['id']=$data['id'];
            $_SESSION['username']=$data['uname'];
            $_SESSION['role']=$data['role'];
        }
        echo "<script>window.location.href='index.php'</script>";
        // header("location:index.php");
        }
        else{
            echo "<script>alert('Invalid Name or Password')</script>";
        }

    }
    ?>