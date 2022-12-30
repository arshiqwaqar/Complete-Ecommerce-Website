<?php
require("config.php");
session_start();
$id = $_SESSION['id'];
if(isset($_POST['btn-cartload'])){
$q = "select product.pname,product.pimage,cart.qty,cart.price from product inner join cart on  product.id=cart.pid where cid =$id;";

$result = mysqli_query($con,$q);

while($data = mysqli_fetch_assoc($result)){
  echo"
<tr>
<td class='product-thumbnail'>
  <img src='pimages/{$data['pimage']}' alt='Image' class='img-fluid'>
</td>
<td class='product-name'>
  <h2 class='h5 text-black'>{$data['pname']}</h2>
</td>
<td ><span id='qty_price'>{$data['pprice']}</span></td>
<td>
  <div class='input-group mb-3' style='max-width: 120px;'>
    <div class='input-group-prepend'>
      <h6 class='m-4'>sad</h6>
    </div>
  </div>

</td>
</tr>";
} 
}
?>
