<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALMA-COSMETICS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,500;1,700;1,900&display=swap" rel="stylesheet">    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- header section start -->

    
    <!-- header section end -->

    <!-- Anouncements start -->
     <!-- header section end -->

    <!-- Anouncements start -->
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


        <!-- <div class="content" style="display:flex; justify-content: space-evenly;margin-top:10px">
            <div>
                <div class="col-xs-15" id="rabbit">
                    <img src="images/téléchargement (1).png"  width="100px">
                </div>
                <h2 style="font-family: 'Roboto';font-style: normal;font-weight: 500;line-height: 42px;text-align: center;">CLEAN</h2>
            </div>
            <div>
                <div id="natur" class="col-sm-15">
                    <img src="images/téléchargement (3).png"  width="100px"><br>
                </div>
                <h2 style="font-family: 'Roboto';font-style: normal;font-weight: 500;line-height: 42px;text-align: center;">VEGAN</h2>
            </div>
            <div>
                <div id="heart" class="col-md-15">
                    <img src="images/téléchargement (2).png" width="100px"><br>
                </div>
                <h2 style="font-family: 'Roboto';font-style: normal;font-weight: 500;line-height: 42px;text-align: center;">CRUELTY-FREE</h2>
            </div>
            <div>
                <div id="love" class="col-lg-15">
                    <img src="images/téléchargement.png " width = "100px"><br>
                </div>
                <h2 style="font-family: 'Roboto';font-style: normal;font-weight: 500;line-height: 42px;text-align: center;">RECYCLABLE</h2>
            </div>

        </div> -->

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
                    <form action="">
                        <?php
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
                                <a href="#" class="btn btn-dark"><i class="bi bi-bag-fill"></i></a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>