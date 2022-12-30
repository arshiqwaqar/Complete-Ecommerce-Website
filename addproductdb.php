<?php
require("config.php");
session_start();

if(isset($_POST['btn-product'])){
    $file=$_FILES['pimage'];
    $filename=$_FILES['pimage']['name'];
    $tmp=$_FILES['pimage']['tmp_name'];
    if(move_uploaded_file($tmp,'pimages/'.$filename)){
        extract($_POST);
        $q = "insert into product (pname,pcategory,pprice,qty,pdesc,pimage)values('$pname','$pcat',$pprice,$qty,'$pdesc','$filename')";
        $result = mysqli_query($con,$q);
  
        echo"<script>window.location.href='addproduct.php'</script>";
     }
        else{
            echo"File Not Uploaded";
        echo"<script>window.location.href='addproduct.php'</script>";

        }
}

if(isset($_POST['btn'])){
    extract($_POST);
    $q="SELECT * FROM `uorder` where orderdate = '$value'";
    $result=mysqli_query($con,$q);
if($result){
    while($data = mysqli_fetch_assoc($result)){
        echo" 
        <tr>
        <td class='border '>{$data['orderid']}</td>
        <td class='border '>{$data['cid']}</td>
        <td class='border '>{$data['country']}</td>
        <td class='border '>{$data['firstname']}</td>
        <td class='border '>{$data['lastname']}</td>
        <td class='border '>{$data['streetaddress']}</td>
        <td class='border '>{$data['houseaddress']}</td>
        <td class='border '>{$data['uemail']}</td>
        <td class='border '>{$data['phoneno']}</td>
        <td class='border '>{$data['ordernotes']}</td>
        <td class='border '>{$data['pname']}</td>
        <td class='border '>{$data['qty']}</td>
        <td class='border '>{$data['total']}</td>
   </tr>";
    }
}
    else{
        echo"No Order Found!";
    }
}





?>