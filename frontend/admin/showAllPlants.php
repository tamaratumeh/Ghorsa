<?php
include("../../backend/connect.php");

session_start();

if (!isset($_SESSION['name'])) {

  echo $_SESSION['name'];
  header('location:../auth/login.php');
  exit();
}


?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="../header.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
        <link rel="icon" href="../img/icon.png" >

        <title>GHORSA</title>
       
        
</head>

<body>
<header>
      <!-- <h1> ايقونات المواقع التواصل مع اللينكات الطرفية</h1> -->
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
      <hr />
      <!-- <h1>عباره عن اسم الموقع وسيرش البحث وايقونات القلب والتسجيل والسله</h1> -->
      <div class="mid-header">
        <div class="col1">
          <a href="index.html" style="color: #28a44c">
            <h4
              style="
                margin-bottom: 0;
                margin-top: 0;
                font-family: Marcellus SC;
                font-size: 45px;
              "
            >
              GHORSA
            </h4>
          </a>
        </div>
        <div class="search-container">
            <div class="search-box">
              <input
                id="input"
                onfocus="focus()"
                type="search"
                class="form-control"
                placeholder="Search here for plant"
              />
              <i
                class="fas fa-search"
                style="
                  position: absolute;
                  right: 10px;
                  top: 70%;
                  transform: translateY(-50%);
                "
              ></i>
            </div>
      <div class="list">

      </div>
       
        </div>
        <div class="icons-account">
          <a href=""><i class="fas fa-shopping-cart"></i></a>
          <a href="favorates.html"><i class="fas fa-heart"></i></a>
          <a href="auth/login.php"><i class="fas fa-user"></i></a>
          <?php  
          ob_start(); 
          if(isset($_SESSION['name'])){
            echo '<form method="POST" action="">
            <button type="submit" name="logout" style="background-color: red; border-radius: 8px; padding: 5px; color: white;">Log Out</button>
        </form>';;
          }
          if(isset($_POST['logout'])){
            session_unset(); 
            session_destroy(); 
            header("Location: auth/login.php");
            exit;
          }
          
          
          ?> 
        
        </div>
      </div>
      <hr />
      <!-- <h1>شريط الواجهات الاخرى</h1> -->
      <div
        class="container-fluid"
        id="menuBar"
        style="padding-left: 18px; padding-top: 0"
      >
        <nav
          class="navbar navbar-expand-lg navbar-dark bg-white"
          style="padding-top: 0"
        >
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              style="background-color: #28a44c; font-size: 12px"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse"
              id="navbarNav"
              style="align-items: center"
            >
              <ul
                class="navbar-nav me-auto"
                style="align-items: center; margin: 0"
              >
                <li class="nav-item">
                  <a class="nav-link" id="home" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="IndoorPlants" href="products.html"
                    >Indoor Plants</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="OutdoorPlants" href="products.html">
                    Outdoor Plants</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="AgriculturalSupplies"
                    href="products.html"
                    >Agricultural Supplies</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="about" href="about.html">About</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <hr style="margin: 0" />
    </header>

    <main>

        <!-- القائمة -->
        <div class="sidebar">
            <h4> 
              <?php
      
              echo "Welcome back , " . $_SESSION['name'];
      
              ?>
            </h4>
            <a href="main.php">Dashboard</a>
      
            <div class="accordion" id="categoryAccordion">
              <div class="accordion-item" style="border: none; background: none;">
                <h2 class="accordion-header" id="headingCategory1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseCategory1" aria-expanded="false" aria-controls="collapseCategory1"
                    style="border: none; box-shadow: none; background: none; ">
                    Plant
                  </button>
                </h2>
                <div id="collapseCategory1" class="accordion-collapse collapse" aria-labelledby="headingCategory1">
                  <div class="accordion-body">
                    <a href="showAllPlants.php" onclick="changeContant(showAllPlants)" id="showAllPlants">Show All Plants</a>
                    <a href="addNewPlants.php" onclick="changeContant('addNewPlant')" id="addNewPlant">Add new plant</a>
      
                  </div>
                </div>
              </div>
            </div>
      
            <div class="accordion" id="categoryAccordion2">
              <div class="accordion-item" style="border: none; background: none;">
                <h2 class="accordion-header" id="headingCategory2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseCategory2" aria-expanded="false" aria-controls="collapseCategory2"
                    style="border: none; box-shadow: none; background: none; ">
                    Category
                  </button>
                </h2>
                <div id="collapseCategory2" class="accordion-collapse collapse" aria-labelledby="headingCategory2">
                  <div class="accordion-body">
                    <a href="#" class="d-block">Show All Categories</a>
                    <a href="#" class="d-block">Add A New Category</a>
                  </div>
                </div>
              </div>
            </div>
            <a href="#">Order</a>
            <a href="Users.html">Users</a>
            <a href="myProfile.html">My Profile</a>
            <a href="#">Setting</a>
          </div>
        <div class="content">
            <div class="title">

                <h3>All Plant</h3>
    
                <select class="form-select" >
                    <option selected>Category</option>
                    <option selected>All</option>


                </select>

            </div>
            <div class="products-card">

            <?php
            $sql="select*from product";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){
                $product_id=$row["product_id"];
                $image=$row["image"];
                $name=$row["name"];
                $price=$row["price"];
                $category_id=$row["category_id"];
                $quantity=$row['stock'];
                $color=$row['pot_color'];
                $description=$row['description'];
                $plantCare=$row['plant_care'];
         $sqll="select name from category where category_id =$category_id";
         $result2=mysqli_query($conn,$sqll);
         $categoryRow = mysqli_fetch_assoc($result2);
         $categoryName=$categoryRow["name"];
             echo "
             
             
             <div class=\"product-card\">
                    <a id=\"edit-icon\" href=\"editPlant.php?i=$product_id;\"><i class=\"fa-regular fa-pen-to-square\"></i></a>

                    <div class=\"product-details\">

                        <img src=\"../img/plant-image/$image\" alt=\"Plant\" class=\"product-img\">


                        <div class=\"product-info\">
                            <h4 >$name <span>$price </span></h4>
                            <p>Quantity Available: <strong>$quantity </strong></p>
                            <p>Category: <strong>$categoryName</strong></p>
                            <p>Color Of Pot Available: <strong>$color </strong></p>
                            <p id=\"mainDescription\">
                              $description
                            </p>
                        </div>
                    </div>


                    <div class=\"expand-icon\" id=\"expandIcon\">
                        <i class=\"fa fa-chevron-down\"></i>
                    </div>


                    <div class=\"extra-info\" id=\"extraInfo\">
                        <p id=\"extraDescription \">
                             $description
                        <p>stronfices.</p>
                        <p> The height of the holder is 34 cm.
                            <br>The width of the holder is 12 cm.
                        </p>
                        </p>

                          $plantCare
                    </div>
                </div> 

             
             
             
             
             ";


            }





?>
                
               
            </div>
                        

        


                
            </div>

        





    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let data=JSON.parse(localStorage.getItem('product'));
        product=document.getElementById('products-admin');

for(var i=0;i<data.length;i++){
product.innerHTML+=`
<div class="product-card">
                    <div class="product-details">

                        <img src="${data[i].image}" alt="Plant" class="product-img">


                        <div class="product-info">
                            <h4 class="fw-bold">${data[i].plantName} <span class="text-success fs-6">${data[i].price}</span></h4>
                            <p>Quantity Available: <strong>0</strong></p>
                            <p>Category: <strong>${data[i].category}</strong></p>
                            <p>Color Of Pot Available: <strong>${data[i].color}</strong></p>
                            <p id="mainDescription" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis; width:150px>
                                ${data[i].descreption}
                            </p>
                        </div>
                    </div>


                    <div class="expand-icon" id="expandIcon">
                        <i class="fa fa-chevron-down"></i>
                    </div>


                    <div class="extra-info" id="extraInfo">
                        <p id="extraDescription ">
                            <strong> Description:</strong> 
                            ${data[i].descreption}
                        </p>
<p>
                                <strong> How to care:</strong> 

    ${data[i].plantCare}

    </p>
                        
                    </div>
                </div>



`
}
document.querySelectorAll(".expand-icon").forEach((expandIcon, index) => {
    const extraInfo = document.querySelectorAll(".extra-info")[index];
    const mainDescription = document.querySelectorAll(".main-description")[index];

    expandIcon.addEventListener("click", function () {
        if (extraInfo.style.display === "none" || extraInfo.style.display === "") {
            extraInfo.style.display = "block";
            mainDescription.style.display = "none";
        } else {
            extraInfo.style.display = "none";
            mainDescription.style.display = "block";
        }

        expandIcon.classList.toggle("rotate");
    });
});
   
    </script>


</body>

</html>