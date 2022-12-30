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
<style>
    form{
        margin: auto;
        margin-top: 200px;
    }
</style>
<?php
include("header.php");
?>
</head>

<body>
    <form method="POST" class="col-6" action="">
    <h1 class="col-12 text-center">Add Category</h1>
    <div class="form-group">
    <label for="exampleInputEmail1" style="font-size: 20px;">Add Category :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Category" name="cat">
  </div>
  <button type="submit" class="btn btn-info mt-3" style="width: 100%;" name="btn-cat">Add category</button>
</form>


<?php
 include("footer.php");
?>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['btn-cat'])){
  extract($_POST);
  $q="insert into category (category)values('$cat')";
  $result = mysqli_query($con,$q);
  if($result){
    echo"<script>alert('Category Added')</script>";
  }
  else{
    echo"<script>alert('Category not Added')</script>";
    
  }
}
?>

