<?php
include("../../backend/connect.php");

session_start();

if(!isset($_SESSION['name'])){

  echo $_SESSION['name'];
   header('location:../auth/login.php');
   exit();
}
$user_id=$_SESSION['user_id'];
if (isset($_GET['i'])) {
    $address_id = $_GET['i'];
    $sql = "SELECT * FROM address WHERE address_id = $address_id";

    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $city_name=$row["city"];
        $street=$row["street"];
        $pin_code=$row["pin_code"];

    } else {
        echo 'Address not found.';
    }
}

?> 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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
    <title>Document</title>

    <style>
      .address-part{
        padding: 10px;
    border: 1px solid #28a44c;
    border-radius: 8px;
    margin-bottom: 10px;
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
          <!-- <?php  
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
          
          
          ?>  -->
        
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
                  <a class="nav-link" id="home" href="index.html">Home</a>
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

      <div class="left-side">

        <div class="sidebar">
            <h4>UserName</h4>
            <a href="main.php" style="background-color: #28a44c; color: white;"><i class="fa fa-user me-2"></i> My Profile</a>
            <a href="favourite.html"><i class="fa fa-heart me-2"></i> Wish List</a>
            <a href="myCart.html"><i class="fa fa-shopping-cart me-2"></i> My Cart</a>
            <a href="myOrders.html"><i class="fa fa-box me-2"></i> My Order</a>
        </div>

      </div>
      <div class="profile-container">

        <form method="POST" action="<?php  htmlspecialchars($_SERVER['PHP_SELF'])?>">
          <h5 class="form-title mb-3">Address</h5>

              <div class="address-part">
                <h5>Address <?php echo $address_id;?></h5><br>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="city" class="form-label">City Name</label>
                      <input type="text" value="<?php echo $city_name ?>" name="city_name" class="form-control" id="city" placeholder="CityName"
                          style="box-shadow: none;">
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="street" class="form-label">Street Name</label>
                      <input type="text" value="<?php echo $street ?>" name="street_name" class="form-control" id="street" placeholder="Street Name"
                          style="box-shadow: none;">
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="number" class="form-label">Pin code</label>
                      <input type="number" name="pin_code" value="<?php echo $pin_code ?>" class="form-control" id="number" placeholder="Pin Code"
                          style="box-shadow: none;">
                  </div>
              </div>


              </div>
              <input type="submit" value="Update" name="submit" class="btn" style="width: 30%;color: white; background-color: #28a44c;">

          </form>
          <?php
if(isset($_POST['submit'])){
    $city_name=$row["city"];
    $street=$row["street"];
    $pin_code=$row["pin_code"];
    $address_id=$row["address_id"];
    
        $sql="Update address set city='$city_name',pin_code='$pin_code',street='$street' where address_id=$address_id";
    $result=mysqli_query($conn,$sql);




  }





?>
        
      </div>
    </main>


    </body>


    </html>