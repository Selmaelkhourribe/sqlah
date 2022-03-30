<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>















































<?php
    require_once ('php/header.php');
?>

















































<section class = "sec1" >
        <div class="pic1" >
            <img src="images/products/ps1.jpg" alt="">
         
        </div>
        <div class="pic2" >
            <img src="images/products/ps2.png" alt="">
           
        </div>
        <div class="pic3" >
            <img src="images/products/ps3.png" alt="">
            
        </div>
        <div class="pic4">
            <img src="images/products/ps4.png" alt="">
           
        </div>
    </section>
    <!-- Anounecement 1 end -->


    <!-- Anounecement 2 start -->
    <section class="container1">
        <div class=incontainer1 >
            <h1">SOFTER, SMOOTHER LIPS</h1>
            <!-- <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-sharp"></i> -->
        </div> 
        <div class = incontainer2 >  
            <p> IN 1,2,3<br>
                Show dry winter lips some moisurizing<br>
                love with our Lips Trio
            </p>
            <!-- <i class="fa-solid fa-star-sharp"></i> -->
        </div> 
        <div class = incontainer3>
        <button> <b> SHOP NOW</b></button>
        
        </div>
            
        <div class="incontainer4" >
            <img src="images/photo.png"><br>
        </div>
    </section>


<!-- //values start -->

    <section class="valuesContainer" >
    <div class="title1" >
        <h1>Our Values</h1>
    </div>
    <div class="component1" >
        <img src="images/Component 1.png" alt="">
    </div>
    <div class="component2" >
        <img src="images/Component 2.png" alt="">
    </div>




    </section>

    <!-- Values end -->
    
    <section class="   row">

       

                <?php
                include "connection.php";
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);
                $imageresult1 =  $result;
 
                while ($prd = mysqli_fetch_assoc($result)) {
                ?>




                 <div class="  col-lg-3 ">
                 <form action="index.php" method="post">
                        <?php
                        $id =  $prd["productID"];
                        $price = $prd["unitPrice"];
                        $label = $prd["productName"];
                        $img = $prd['image'];
                        $des = $prd['description']; ?>
                        <div class="card col"  style="width: 18rem;">
                            <img src='<?php echo $img  ?> ' class="card-img-top" alt="product" height="250">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $label  ?></h5>
                                <p>
                                <i class="fa-solid fa-star-sharp"></i>                                
                            </p>
                                <strong><?php echo  $price   ?> .$</strong>
                                <p class="card-text"><?php echo  $des   ?> </p>
                                <button type="submit" class="btn btn-dark " name="add">Add to Cart <i class="bi bi-bag-fill"></i></button>
                                 <input type='hidden' name='product_id' value='<?php echo  $id   ?>'>
                            </div>
                        </div>
                        
                    </form>
                </div>




                    <?php
                    }
                ?>
      

    </section>

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
        <div class="copyright">
        <p class="footer-company-name">Copyright © 2021 <strong>SALMA-COSMETOCS</strong> All rights reserved</p></div>
    </footer>

















<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
