<?php
session_start();
require 'connection.php';
if(!empty($_SESSION["customerCode"])){
    header("location: index.php");
}
if(isset($_POST["loginbtn"])){
 $email = $_POST['email'];
 $password = $_POST['password']; 
 $result = mysqli_query($conn,"SELECT * FROM customers WHERE email ='$email'");
 $row = mysqli_fetch_assoc($result);
 if(mysqli_num_rows($result) > 0){
     if($password == $row["password"]){
       $_SESSION["login"] = true;
       $_SESSION["customerCode"] =$row["customerCode"];
       header("location: index.php");
     }
     else{
        echo
        "<script>alert('Wrong Password');</script>";
     }

 }
 else{
     echo
     "<script>alert('User Not Registered');</script>";
 }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 



    <title>login</title>

</head>
<body>
    <div class ="offer">Free shipping on orders over 25$</div>
    <div class ="navbar">
     <img  id ='img'src="./images/logo.png" alt="">
     <ul>
     <li><a href ="mainpage.php">Home</a></li>
     <li>Product</li>
     </ul>
     <div class="line"></div>
    </div>
    <h1 id='login'>LOGIN</h1>
    <P id='enteremail'>Please enter your e-mail and password:</P>
<form method="POST">
    <input type="text" name="email" id ="email" placeholder="Email">
    <input type="password" name="password" id ="password" placeholder="Password">
    <button type ="submit" name="loginbtn"id="loginbtn">LOGIN</button>
</form>
    <p id ='creataccout'> <span id='span'>Don't have an account?</span><a href="register.php">Create one</a> </p>
<footer class="footer-distributed">
<div class="footer-left">
    <img src="logo2.png" alt="">
    <p class="footer-links">
        <a href="#">Home</a>
        |
        <a href="#">About</a>
        |
        <a href="#">Contact</a>
        |
        <a href="#">Blog</a>
    </p>

    <p class="footer-company-name">Copyright © 2021 <strong>SALMA-COSMETOCS</strong> All rights reserved</p>
</div>

<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Tanger</span>
            Morocco</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+212 64**9**258</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto : salmacosmetics@gmail.com">salmacosmetics@gmail.com</a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>About the company</span>
        <strong>SALMA COSMETICS</strong> is the Dermatologist Recommended skincare brand offers a wide range of skincare products.
    </p>
    <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
</div>
</footer>


</body>
</html>