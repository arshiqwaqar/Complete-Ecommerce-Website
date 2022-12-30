<!doctype html>
<html lang="en">
<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>

</style>
</head>

<body>
  <?php
  include("header.php");
  require("config.php");
  ?>
<form action="" method="POST">
    <h2>Select date from where You Wanna see the orders</h2>
    
  <input type="date"  name="date" id="s_date" onchange="filter()" >
  

<table class="table table-primary ">
    <tr>
        <th>ORDER ID</th>
        <th>Customer ID</th>
        <th>Counry</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Street Address</th>
        <th>House Address</th>
        <th>Email</th>
        <th>Phone NO</th>
        <th>Order Notes</th>
        <th>Product Name</th>
        <th>Qty</th>
        <th>Total</th>
    </tr>
    <tbody id="order">

    </tbody >
   
</table>

</form>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script>
    
   
    function filter(){
        var sdate = document.getElementById('s_date').value;
      
        $.ajax({
            url:'addproductdb.php',
            method:'POST',
            data:{
                btn:'btn-filter',
                value:sdate,
            },
            success:function(date){
                document.getElementById('order').innerHTML=date;
                
                
            }
        },)
    }
  </script>
<?php
include("footer.php");
?>