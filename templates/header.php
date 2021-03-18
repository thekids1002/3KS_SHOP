<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Đồ án</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="./css/kiet.css">
  <link rel="stylesheet" href="./css/style.css">

</head>
<!--/head-->

<body>


  <!-- TopBar -->
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="contactinfo">
            <ul class="nav nav-pills">
              <li><a href="#"><i class="fa fa-phone"></i> +84 396.527.908 </a></li>
              &ensp;
              <li><a href="#"><i class="fa fa-envelope"></i> phimtonghop7879@gmail.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="social-icons">
            <ul class="nav navbar-nav">
              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- endtopbar -->
  <!-- middle -->
  <div class="sticky-top nav-bot">
    <div class="header-middle">
      <!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="logo">
              <img src="./img/logo/logo-2.png" alt="Lo">
            </div>
            <div class="btn-group">

            </div>
          </div>
          <div class="col-sm-8">
            <div class="shop-menu">
              <ul class="nav navbar-nav">
                <!--  <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                      <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                      <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
              -->
                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- bottom header -->
    <div class="bottom-header">
      <nav class="navbar navbar-expand-lg navbar-light  static-top">
        <div class="container">
          <div class="col-sm-9">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-left">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> About</a>
                </li>


                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Shop
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
              <div class="col-sm-9"></div>
              <form class="search" action="">
                <button id="search-btn" type="button" data-toggle="modal" data-target="#search_modal">
                  <i class="fa fa-search" style="font-size:20px"></i>
                </button>
              </form>
            </div>
          </div>

        </div>
    </div>
  </div>

  </nav>
  </div>
  <!-- end-bottom header -->









  <!--  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Disabled</a>
            </li>
          </ul>
        </div>
        </div>
      </nav> -->