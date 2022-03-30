







<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="index.php" class="navbar-brand">
            <h3 class="px-5">
                <img src="https://media.discordapp.net/attachments/948606727014723615/958708314592649266/Capture1.PNG" height="100px" >
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>













 
 <style>
     .blabla{
    list-style: none;
    justify-content: space-between;
    margin-top: 50px;

}
.mx{
    margin-left: -100px;



}
.hh{
    margin-left: -90px;
    margin-top: 5px;
}
 </style>



            <ul class=" blabla d-flex">
                <li>About</li>
                <li>New Arrivals</li>
                <li>Skin Care</li>
          
        
                <li> 
                   <a href ="register.php"> <i class="bi bi-person-circle"></i></a>
                </li>
                <li class="hh">
                <a href="cart.php" class=" d-flex  ">
                   
                        <i class="fas fa-shopping-cart"></i> 
                         <p class="mx">               <?php

                                if (isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                                }else{
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                }

                                ?>
                       </p>
                   
                </a>
                
                </li>
                

 



                </ul>

           
    </nav>
  







    </header>
