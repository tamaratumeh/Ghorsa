
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="css/style4.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>
    <style>

        .content{
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: start;

        }
       

        main {
            display: grid;
            grid-template-columns: 20% 1fr;
            gap: 5px;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: start;
            gap: 20px;
        }
        .card {
            width: 50%;
            display: flex;
            flex-direction: row;
         
        }
        .card .second-part{
            width: 100%;
        }
        .card .first-part{
            width: 30%;
        }
        .card img {
            width: 70%;
            height: auto;
            margin-right: 20px;
            background-color:#f0f0f0;
            float: left;
        }
        .second-part h4{
            margin-top: 30px;
            margin-left: 15px;

        }
       
        .edit {
            font-size: 20px;
            color: #555;
            margin-left: auto;
            margin-right: auto;
            cursor: pointer;
            float: right;
        }
        @media (max-width:600px) {
            .container {
                max-width: 200%;
                padding: 5px;
            }
            .card {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px;
            }
            .card img {
                width: 100%;
                margin-right: 0;
                margin-bottom: 10px;
            }
            .card .text {
                margin-top: 0;
                font-size: 16px;
            }
            .edit {
                align-self: flex-end;
                margin-right: 0;
            }
        }
    </style>
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
              <a href="addCategory.php" class="d-block">Add A New Category</a>
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

            <h4 > All Catagory </h4>
                            <div class="container">


                            <?php

                            $sql='Select*From category';
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result)){
                                 $image=$row['image'];
                                 $name=$row['name'];
                                 echo "
                                 <div class=\"card\">
                                    <div class=\"first-part\">
                                        <img src=\"../img/$image\" alt=\"Plant\">
                                    </div>
                                    <div class=\"second-part\">
                                        <i class=\"fas fa-edit edit\"></i>
                                        <h4>$name</h4>
                                    </div>
                                      
                                </div>
                                 ";


                            }



?>
                                
                            </div>
                        </div>
                
    </main>

</body>

</html>