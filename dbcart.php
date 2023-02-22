<?php
require("config.php");
session_start();
if(isset($_POST['btn'])){

    $cid = $_SESSION['id'];
    extract($_POST);
    if(isset($_SESSION['id'])!=null){
        $q="select * from cart where cid=$cid and pid=$pid";
        $result=mysqli_query($con,$q);
        
        if(mysqli_num_rows($result)>0){
            
            while($row = mysqli_fetch_assoc($result)){  
                $total=$row['total'];
                $qty_1=$row['qty'];
            }
        $q = "UPDATE `cart` SET `pid`=$pid,`cid`=$cid,`qty`=$qty_1+1,`total`=$total+$price WHERE pid=$pid";
        $result=mysqli_query($con,$q);
        if($result){
            echo "Added to Cart";
        }
        else{
            echo"NOT ADDED IN CART";

        }    
    
    }

else{
        $q = "INSERT INTO `cart`(`pid`,`cid`,`qty`,`price`,`total`) VALUES ('$pid',$cid,'$qty','$price','$price')";
        $result=mysqli_query($con,$q);
        if($result){
            echo "Product Added to Cart";
        }
        else{
            echo"NOT ADDED IN CART";

        }
    }
    

    }
    else{
        echo"Login To Add to Cart";
    }
    
    
}
if(isset($_POST['btn2'])){
  
                      if(isset($_SESSION['id'])!=null){
                      $q="SELECT COUNT(pid) from cart";
                      $result=mysqli_query($con,$q);
                      while($data=mysqli_fetch_assoc($result)){
                        
                        echo "<span class='count bg-warning'>{$data['COUNT(pid)']}</span>";
                        
}
}
}
?>
