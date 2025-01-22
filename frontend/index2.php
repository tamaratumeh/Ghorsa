<?php
include("../backend/connect.php");

session_start();

if (isset($_GET['i'])) {
    $product_id = $_GET['i'];
    $sql = "SELECT * FROM product WHERE product_id = $product_id";

    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $price = $row['price'];
        $description = $row['description'];
        $image = $row['image'];
        $color = $row['pot_color'];
        $quantity = $row['stock'];
        $category = $row['category_id'];
        $plant_care = $row['plant_care'];

    } else {
        echo 'Product not found.';
    }
}

?> 




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css2.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body >
   
      
      
     


    <header>
        <div class="iconlink">
            <div class="icons">
                <a href="#"><i class="fas fa-phone"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"> <i class="fa-brands fa-instagram"></i></a>
            </div>

            <div>
                <nav class="link">
                    <a href="#">Setting</a>
                    <a href="#">Send a Gift</a>
                    <a href="#">Blog</a>

                </nav>
            </div>
        </div>
        <hr>
        <!-- <h1>عباره عن اسم الموقع وسيرش البحث وايقونات القلب والتسجيل والسله</h1> -->
        <div class="container-fluid" id="navbarTitle">
            <div class="row">
                <div class="col-4 ">
                    <div class="col1">
                        <a href="#" style="color: #28a44c;">
                            <h4 style="margin-bottom: 0;margin-top: 0;  font-family: Marcellus SC; font-size: 45px;">
                                GHORSA</h4>
                        </a>

                    </div>
                </div>
                <div class="col-4 ">
                    <div class="search-container">
                        <input type="search" class="form-control" placeholder="Search here for plant">
                        <i class="fas fa-search"
                            style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);"></i>
                    </div>
                </div>
                <div class="col-4">
                    <div class="icons-account">
                        <div class="shop-cart">
                            <a href="user/myCart.php"><i class="fas fa-shopping-cart"></i></a>
                           <span>0</span>
                        </div>                       
                         <a href="favorates.html"><i class="fas fa-heart"></i></a>
                        <a href="auth/login.php"><i class="fas fa-user"></i></a>

                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!-- <h1>شريط الواجهات الاخرى</h1> -->
        <div class="container-fluid " id="menuBar" style="padding-left: 18px; padding-top: 0; ">
            <nav class="navbar navbar-expand-lg navbar-dark bg-white" style="padding-top: 0;">
                <div class="container-fluid">
                    <button class="navbar-toggler" style="background-color: #28a44c; font-size: 12px; z-index: 1000;"
                        type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav" style=" align-items: center;">
                        <ul class="navbar-nav me-auto" style="align-items: center;margin: 0;">
                            <li class="nav-item ">
                                <a class="nav-link" id="home" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="prodects.php" id="indoorDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Indoor Plants
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="indoorDropdown">
                                    <li><a class="dropdown-item" href="#">Small Indoor Plants</a></li>
                                    <li><a class="dropdown-item" href="#">Medium Indoor Plants</a></li>
                                    <li><a class="dropdown-item" href="#">Large Indoor Plants</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="prodects.php" id="outdoorDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Outdoor Plants
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="outdoorDropdown" >
                                    <li><a class="dropdown-item" href="#">Flowering Plants</a></li>
                                    <li><a class="dropdown-item" href="#">Shrubs</a></li>
                                    <li><a class="dropdown-item" href="#">Trees</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="prodects.php" id="suppliesDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Agricultural Supplies
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="suppliesDropdown">
                                    <li><a class="dropdown-item" href="#">Fertilizers</a></li>
                                    <li><a class="dropdown-item" href="#">Pesticides</a></li>
                                    <li><a class="dropdown-item" href="#">Tools</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="about" href="about.html">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <hr style="margin: 0;">
        
    </header>

    <main>
        <div class="container py-4 " id="detalis-product">

            <?php

            echo '
            
            `<div class="row align-items-center justify-content-center ">
                <div class=" col-md-5  text-center">
                    <img src="img/plant-image/'.$image.'" alt="Product Image" class="img-fluid">
                </div>
                <div class=" col-md-6 " style="margin-top: 10px; display: grid; gap: 10px; ">
                    <h2 class="product-title" style="font-family: Judson;
                        width: 300px; font-size: 30px;">'.$name.'</h2>
                    <p class="product-price text-success"
                        style="width: 200px; font-size:48px ;color: #28a44c; font-family:Judson ;">'.$price.'₪</p>


                    <div class="d-flex align-items-center mb-3"
                        style="width: fit-content; border-radius: 15px ; background-color: #f0f0f0;">
                        <button class="btn btn-outline-secondary"
                            style="color: #28a44c; font-size: 12px; border-radius: 30px;">+</button>
                        <input type="number" class="form-control text-center mx-2" value="1"
                            style="width: 60px; border: none;  background-color: #f0f0f0; box-shadow: none;">
                        <button class="btn btn-outline-secondary"
                            style="color: #28a44c; border-radius: 3rem; font-size: 12px;">-</button>
                    </div>

                    <div class="class= mb-3" style="display: flex; gap: 8px;">
                        <button class="btn" id="addToCart" style="background-color: #28a44c; width: 90%; color: white;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                           Add to Cart
                          </button>
                          
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <h1>Shopping Cart</h1>
                              <div class="list-cart" id="carts-list"></div>  
                           <div class="btn">
            <button class="close">CLOSE</button>
            <button class="check-out">CHECK OUT</button>

    </div>
                                   </div>
                                   </div>
                                                                  </div>


                            
                    <!-- التبويبات -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" style="color: black;" id="description-tab"
                                data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab"
                                aria-controls="description" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="plantcare-tab" style="color: black;" data-bs-toggle="tab"
                                data-bs-target="#plantcare" type="button" role="tab" aria-controls="plantcare"
                                aria-selected="false">Plant Care</button>
                        </li>
                    </ul>

                    <!-- محتوى التبويبات -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            '.$description.'
                        </div>
                        <div class="tab-pane fade" id="plantcare" role="tabpanel" aria-labelledby="plantcare-tab">
                            <p>
                            '.$plant_care.'

                            </p>
                        </div>
                    </div>


                    <div>

                    </div>
                </div>
            </div>

            ';


?>

           
        </div>

        <hr>


        <!-- قائمة المنتجات -->

        <section class="products-cards">
            <div class="heading">
                <h1>Plants may you like</h1>

            </div>

            <div class="box-container">

                <div class="box" onclick="goToPage()">

                    <div class="img2">


                        <img src="2.png" alt="">

                        <a href="" class="fa-regular fa-heart"></a>
                    </div>
                    <hr>
                    <div class="desc">
                        <div class="des">
                            <h5>Wild Session Plant</h5>
                            <h6>35<strong>₪</strong></h6>
                        </div>
                        <div class="icon2">
                            <a href="#">Add to Cart</a>
                            <a href="" style="padding-top: 3px;" class="fa-solid fa-cart-shopping "></a>
                        </div>

                    </div>


                </div>


                <div class="box" onclick="goToPage()">
                    <div class="img2">
                        <img src="2.png" alt="">
                        <a href="" class="fa-regular fa-heart"></a>
                    </div>
                    <hr>
                    <div class="desc">
                        <div class="des">
                            <h5>Wild Session Plant</h5>
                            <h6>35<strong>₪</strong></h6>
                        </div>
                        <div class="icon2">
                            <a href="#">Add to Cart</a>
                            <a href="" style="padding-top: 3px;" class="fa-solid fa-cart-shopping "></a>
                        </div>

                    </div>


                </div>
                <div class="box" onclick="goToPage()">
                    <div class="img2">
                        <img src="2.png" alt="">
                        <a href="" class="fa-regular fa-heart"></a>
                    </div>
                    <hr>
                    <div class="desc">
                        <div class="des">
                            <h5>Wild Session Plant</h5>
                            <h6>35<strong>₪</strong></h6>
                        </div>
                        <div class="icon2">
                            <a href="#">Add to Cart</a>
                            <a href="" style="padding-top: 3px;" class="fa-solid fa-cart-shopping "></a>
                        </div>

                    </div>



                </div>
                <div class="box" onclick="goToPage()">
                    <div class="img2">
                        <img src="2.png" alt="">
                        <a href="" class="fa-regular fa-heart"></a>
                    </div>
                    <hr>
                    <div class="desc">
                        <div class="des">
                            <h5>Wild Session Plant</h5>
                            <h6>35<strong>₪</strong></h6>
                        </div>
                        <div class="icon2">
                            <a href="#">Add to Cart</a>
                            <a href="" style="padding-top: 3px;" class="fa-solid fa-cart-shopping "></a>
                        </div>

                    </div>


                </div>
                <div class="box" onclick="goToPage()">
                    <div class="img2">
                        <img src="2.png" alt="">
                        <a href="" class="fa-regular fa-heart"></a>
                    </div>
                    <hr>
                    <div class="desc">
                        <div class="des">
                            <h5>Wild Session Plant</h5>
                            <h6>35<strong>₪</strong></h6>
                        </div>
                        <div class="icon2">
                            <a href="#">Add to Cart</a>
                            <a href="" style="padding-top: 3px;" class="fa-solid fa-cart-shopping "></a>
                        </div>

                    </div>


                </div>
                <div class="box" onclick="goToPage()">
                    <div class="img2">
                        <img src="2.png" alt="">
                        <a href="" class="fa-regular fa-heart"></a>
                    </div>
                    <hr>
                    <div class="desc">
                        <div class="des">
                            <h5>Wild Session Plant</h5>
                            <h6>35<strong>₪</strong></h6>
                        </div>
                        <div class="icon2">
                            <a href="#">Add to Cart</a>
                            <a href="" style="padding-top: 3px;" class="fa-solid fa-cart-shopping "></a>
                        </div>

                    </div>


                </div>
                <div class="box" onclick="goToPage()">
                    <div class="img2">
                        <img src="2.png" alt="">
                        <a href="" class="fa-regular fa-heart"></a>
                    </div>
                    <hr>
                    <div class="desc">
                        <div class="des">
                            <h5>Wild Session Plant</h5>
                            <h6>35<strong>₪</strong></h6>
                        </div>
                        <div class="icon2">
                            <a href="#">Add to Cart</a>
                            <a href="" style="padding-top: 3px;" class="fa-solid fa-cart-shopping "></a>
                        </div>

                    </div>


                </div>
                <div class="box" onclick="goToPage()">
                    <div class="img2">
                        <img src="2.png" alt="">
                        <a href="" class="fa-regular fa-heart"></a>
                    </div>
                    <hr>
                    <div class="desc">
                        <div class="des">
                            <h5>Wild Session Plant</h5>
                            <h6>35<strong>₪</strong></h6>
                        </div>
                        <div class="icon2">
                            <a href="#">Add to Cart</a>
                            <a href="" style="padding-top: 3px;" class="fa-solid fa-cart-shopping "></a>
                        </div>

                    </div>


                </div>
                <div class="box" onclick="goToPage()">
                    <div class="img2">
                        <img src="2.png" alt="">
                        <a href="" class="fa-regular fa-heart"></a>
                    </div>
                    <hr>
                    <div class="desc">
                        <div class="des">
                            <h5>Wild Session Plant</h5>
                            <h6>35<strong>₪</strong></h6>
                        </div>
                        <div class="icon2">
                            <a href="#">Add to Cart</a>
                            <a href="" style="padding-top: 3px;" class="fa-solid fa-cart-shopping "></a>
                        </div>

                    </div>



                </div>
                <div class="box" onclick="goToPage()">
                    <div class="img2">
                        <img src="2.png" alt="">
                        <a href="" class="fa-regular fa-heart"></a>
                    </div>
                    <hr>
                    <div class="desc">
                        <div class="des">
                            <h5>Wild Session Plant</h5>
                            <h6>35<strong>₪</strong></h6>
                        </div>
                        <div class="icon2">
                            <a href="#">Add to Cart</a>
                            <a href="" style="padding-top: 3px;" class="fa-solid fa-cart-shopping "></a>
                        </div>

                    </div>


                </div>

                <div class="box" onclick="goToPage()">

                    <div class="img2">
                        <img src="2.png" alt="">
                        <a href="" class="fa-regular fa-heart"></a>
                    </div>
                    <hr>
                    <div class="desc">
                        <div class="des">
                            <h5>Wild Session Plant</h5>
                            <h6>35<strong>₪</strong></h6>
                        </div>
                        <div class="icon2">
                            <a href="#">Add to Cart</a>
                            <a href="" style="padding-top: 3px;" class="fa-solid fa-cart-shopping "></a>
                        </div>

                    </div>



                </div>


            </div>


        </section>
    </main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
        </div>
    
     
      </footer>

    <script src="script2.js"> </script>
</body>

</html>