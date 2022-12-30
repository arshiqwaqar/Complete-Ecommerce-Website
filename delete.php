<?php
require("config.php");
if(isset($_POST['btn'])){
extract($_POST);
$q="delete from cart where pid = $pname";
$result = mysqli_query($con,$q);
if($result){
    echo"DELETED";
}

}
?>