<?php

require("config.php");
if(isset($_POST['btn-register'])){
extract($_POST);
$q = "insert into uaccount(uname,email,password)values('$username','$email','$password')";

$result = mysqli_query($con,$q);
echo "
<script>window.location.href='index.php'</script>";

}
?>