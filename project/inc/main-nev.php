<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <script src="js\sweetalert.js"></script>
    <meta charset="utf-8">
    <title>Nature's - With Live Wild Life</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icom" href="img/favicon_io/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="online/all.main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="bootstrap icon\chevron-left.svg" rel="stylesheet">
    <link href="bootstrap icon\chevron-right.svg" rel="stylesheet">



    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="BOOTSTRAP/css/bootstrap4-toggle.min.css" rel="stylesheet"> -->

    <!-- Template Stylesheet -->


    <link href="css/style.css" rel="stylesheet">
    <link href=" fontawesome\css\all.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <!-- <style>
    /* .toggle.ios,
    .toggle-on.ios,
    .toggle-off.ios {
        border-radius: 20rem;
    }

    .toggle.ios .toggle-handle {
        border-radius: 20rem;
    } */

    /* .toggle.android { border-radius: 20rem;}
        .toggle.android .toggle-handle { border-radius: 0px; } */
    </style> -->


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small> Sasan Gir, Junagadh-Gujarat (India).</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Tue - Sun : 09.00 AM - 08.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+91 7878 012 124</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                    <!--<div class="tg-btn">
                     <input type="checkbox" checked data-toggle="toggle" data-style="android" data-onstyle="info"> 
                    <input type="checkbox"   onclick="click()" >
                    <input type="checkbox" id="checkbox" name="" id="">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- <script> 
  


    const btn = document.querySelector('#checkbox');
     console.log(btn);
btn.addEventListener("change",function(){
    if(btn.checked){
    //  alert("hii ");
    document.body.style.background='black';
    }
    else{
    //  alert("hello");
    document.body.style.background='white';
    }
}); 
    
    
    </script>-->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="/img/logo/logo1.png" alt="Icon" onerror='this.src="img/logo/logo1.png"'>

            <h2 class="m-0 text-primary">Nature's Legacy</h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>

                <a href="contact.php" class="nav-item nav-link">Contact</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="service.php" class="dropdown-item">Services</a>
                        <a href="visiting.php" class="dropdown-item">FAQ</a>
                    </div>
                </div>
                <a href="register.php" class="nav-item nav-link">Register</a>
                <?php
                if (isset($_SESSION['users'])) {
                ?>
                <a href="logout.php" class="nav-item nav-link">Logout</a>
                <?php
                } else {
                ?>
                <a href="login.php" class="nav-item nav-link">Login</a>
                <?php
                }
                ?>
            </div>
            <a href="membership.php" class="btn btn-primary">Book Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->