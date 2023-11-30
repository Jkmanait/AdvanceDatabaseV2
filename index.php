<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <!-- boostrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />     
     <!--cc file  -->
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
    </li>
    </ul>
</nav>

<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">FIND THAT SUITS YOU</h3>
    <p class="text-center">"Clothes aren’t going to change the world, but the person wearing them might."</p>
</div>

<!-- fourth child -->
<div class="row">
    <div class="col-md-10"></div>
    <!-- Products -->
    <div class="row">
        <div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/P1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Polo T-Shirt</h5>
    <p class="card-text">Adidas Polo T Shirt Damen Rot</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
</div>
        <div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/p2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Leather Jacket</h5>
    <p class="card-text">Fur Lined Leather Jacket</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
        </div>
        <div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/p3.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">T-Shirt</h5>
    <p class="card-text">Black T-shirt</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
<div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/P4.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Short Pants</h5>
    <p class="card-text">Short Pants Gray</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
    <div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/P5.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Long Pants</h5>
    <p class="card-text">Khaki Pant</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
<div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/P6.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Long Sleeve</h5>
    <p class="card-text">Women S Long Sleeve</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
<div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/P7.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hoodie</h5>
    <p class="card-text">Hoodie</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
<div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/P8.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sleeveless Shirt</h5>
    <p class="card-text">Color Gray Sleeveless Shirt</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
<div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/P9.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Prom Dress</h5>
    <p class="card-text">Phantom Of The Opera Prom Dress</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
<div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/P10.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jean Shorts</h5>
    <p class="card-text">Girls Jean Shorts</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
<div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/P11.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Fashion Bag</h5>
    <p class="card-text">Women Fashion Bags</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
<div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/P12.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Back Pack</h5>
    <p class="card-text">Back Pack</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
<div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/P13.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Baseball Jersey</h5>
    <p class="card-text">Champion Braided Baseball Jersey</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
<div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/P14.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Blazer</h5>
    <p class="card-text">Blazer For Men</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
<div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/P15.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Shirt</h5>
    <p class="card-text">Dress Shirt</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
<div class="col-md-3 mb-4">
        <div class="card">
  <img src="./images/P16.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Short Sleeve</h5>
    <p class="card-text">Men Short Sleeve Poplin Dress Shirt</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>


<!-- last child -->
<div class="bg-info p10 text-center">
    <p>All rights reserved</p>
</div>
<!-- boostrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
</body>
</html>