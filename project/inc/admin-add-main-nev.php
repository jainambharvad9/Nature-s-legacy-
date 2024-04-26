<?php session_start();
if (!isset($_SESSION['admin'])) {
    ?>
    <script>
       //  window.location.href="login.php";  
    </script>
    <?php
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nature's - With Live Wild Life</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon_io/favicon.ico" rel="icon">

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

    <!-- Template Stylesheet -->


    <link href="css/style.css" rel="stylesheet">
    <link href=" fontawesome\css\all.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="img/logo/logo1.png" alt="">
            <h3 class="m-0 text-primary">Nature's Legacy</h3>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="admin-home-add.php" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="admin-categorys.php" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown">Category</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="admin-categorys-add.php" class="dropdown-item">Category Add</a>
                        <a href="admin-categorys-view.php" class="dropdown-item">Category List</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="admin-safaris.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Safari</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="admin-safaris-add.php" class="dropdown-item">Safari Add</a>
                        <a href="admin-safaris-view.php" class="dropdown-item">Safari List</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="admin-gallers.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="admin-gallers-add.php" class="dropdown-item">Gallery Add</a>
                        <a href="admin-gallers-view.php" class="dropdown-item">Gallery List</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="admin-videoss.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Video</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="admin-videos-add .php" class="dropdown-item">Video Add</a>
                        <a href="admin-videos-view.php" class="dropdown-item">Video List</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="admin-faqs.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Faq</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="admin-faqs-add.php" class="dropdown-item">Faq Add</a>
                        <a href="admin-faqs-view.php" class="dropdown-item">Faq List</a>
                    </div>
                </div>
                <a href="admin-users-view.php" class="nav-item nav-link">User</a>
                <a href="admin-reviews-view.php" class="nav-item nav-link">Review</a>
                <a href="admin-bookings-view.php" class="nav-item nav-link">Booking</a>
                <a href="admin-documents-view.php" class="nav-item nav-link">Feedback</a>
                <?php
                        if (isset($_SESSION['admin'])) {
                            ?>
                            <a href="logout.php"  class="nav-item nav-link">Logout</a>
                            <?php
                        } else {
                            ?>
                            <a href="login.php" class="nav-item nav-link">Login</a>
                            <?php
                        }
                        ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->