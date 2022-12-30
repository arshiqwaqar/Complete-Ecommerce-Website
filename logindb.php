<?php
session_start();
    require("config.php");
    
    
    
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
        echo "<script>window.location.href='adminpage.php'</script>";

        }
        else{
            echo "<script>alert('Invalid Name or Password')</script>";
        echo "<script>window.location.href='login.php'</script>";

        }

    }
    ?>