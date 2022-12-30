<?php
session_start();
require("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
<?php
include("header.php");
?>

</head>
<body>
    <h1 class="text-center">Add Product</h1>
<form class="col-6 mx-auto" enctype="multipart/form-data" method="POST" action="addproductdb.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name:</label>
    <input type="text" class="form-control border-bottom-info" id="exampleInputEmail1" aria-describedby="emailHelp" name="pname">
  </div>
  <label for="">Category:</label><br>
  <select name="pcat" id="" class="col-4 border-bottom-info form-control">
    <option value="">Choose Category...</option>
    <?php
    $q = "select * from category";
    $result=mysqli_query($con,$q);
    while($data = mysqli_fetch_assoc($result)){
?>
<option value="<?=$data['category']?>"><?=$data['category']?></option>

    <?php
}
    ?>
  </select>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Price:</label>
    <input type="text" class="form-control border-bottom-info" id="exampleInputEmail1" aria-describedby="emailHelp" name="pprice">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Quantity:</label>
    <input type="text" class="form-control border-bottom-info" id="exampleInputEmail1" aria-describedby="emailHelp" name="qty">
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Description:</label>
    <textarea type="text" class="form-control border-bottom-info" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Product Description" name="pdesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Image:</label>
    <input type="file" class="form-control border-bottom-info" id="exampleInputPassword1" name="pimage">
  </div>
  <button type="submit" class="btn btn-primary" name="btn-product" >Add Product</button>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include("footer.php");
?>