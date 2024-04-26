<?php include("inc/main-nev.php"); 
 include("inc/connection.php"); 

?>
<!-- Header Start -->
<div class="container-fluid bg-dark p-0 mb-5">
    <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="main-div">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="img/28.jpg" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="img/19.jpg" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="img/32.jpg" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="img/22.jpg" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="img/34.jpg" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="img/14.jpg" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="img/36.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="all-info">
                <h1 class="display-4 text-light mb-5">Enjoy <span style="color: #2EB872;">Wonderful</span> Day With
                    <br> Your Family
                </h1>
                <div class="d-flex align-items-center pt-4 animated slideInDown">
                    <a href="about.php" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">Read More</a>
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    <h6 class="text-white m-0 ms-4 d-none d-sm-block">Watch Video</h6>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--    x Header End -->

<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <!-- <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe> -->
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/l6BYM5Mvq6A"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p><span class="text-primary me-2">#</span>Welcome To Nature's Legacy</p>
                <h1 class="display-5 mb-4">Why You Should Visit <span class="text-primary">National</span> Park!</h1>
                <p class="mb-4">We protect wildlife and their habitats from human impact and destruction. We provide
                    animals a safe space to survive and reproduce. We protect places of natural beauty and are home to
                    several endemic species.</p>
                <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Free Car Parking</h5>
                <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Natural Environment</h5>
                <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Professional Guide & Security</h5>
                <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>World Best Animals</h5>
                <a class="btn btn-primary py-3 px-5 mt-3" href="about.php">Read More</a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="img-border">
                    <img class="img-fluid" src="img/11.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-paw fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">11556</h1>
                <p class="text-white mb-0">Total Animal</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">32786</h1>
                <p class="text-white mb-0">Yearly Vigitors</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">87954</h1>
                <p class="text-white mb-0">Total Contributors</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">51326</h1>
                <p class="text-white mb-0">Save Wild Life</p>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Service Start -->
<section class="call">
    <div class="container">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span>Our Services</p>
                <h1 class="display-5 mb-0">Special Services For <span class="text-primary">National Park</span> Visitors
                </h1>
            </div>
            <div class="col-lg-6">
                <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                    <i class="fa fa-3x fa-mobile-alt text-white"></i>
                    <div class="ms-4">
                        <p class="text-white mb-0">Call for more info</p>
                        <h2 class="text-white mb-0">+91 1234 567 890</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-square-parking"></i></div>
                    <div class="content">
                        <h3>Car parking</h3>
                        <p>Enjoy hassle-free car parking at our park. Ample parking space, secure facilities, and
                            convenient access ensure a smooth experience for all visitors. Focus on exploring wildlife,
                            while we take care of your vehicle. Park with confidence at Animal National Park.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-pizza-slice"></i></div>
                    <div class="content">
                        <h3>Food & Beverages</h3>
                        <p>Indulge in a delightful culinary journey at our park. Our food & beverages service offers a
                            diverse menu of scrumptious dishes and refreshing drinks, catering to every taste. Savor the
                            flavors amidst the wilderness for a memorable dining experience at Animal National Park.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-camera-retro"></i></div>
                    <div class="content">
                        <h3>Animal Photos</h3>
                        <p>Capture unforgettable moments with our animal photos service. Our professional photographers
                            capture stunning shots of wildlife in their natural habitat. Take home mesmerizing memories
                            and support conservation efforts. Preserve the magic of Animal National Park forever.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service End -->


<!-- Animal Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span>Our Animals</p>
                <h1 class="display-5 mb-0">Let`s See Our <span class="text-primary">Nature's Legacy</span> Awsome
                    Animals</h1>
            </div>

        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="img/12.jpg" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/12.jpg" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Bird</p>
                                    <h5 class="text-white mb-0">macaw</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="animal-item" href="img/26.jpg" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/26.jpg" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Bird</p>
                                    <h5 class="text-white mb-0">King Fisher</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="img/23.jpg" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/23.jpg" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Bird</p>
                                    <h5 class="text-white mb-0">Parrot</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="animal-item" href="img/11.jpg" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/11.jpg" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                    <h5 class="text-white mb-0">Asain Lion</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="img/15.jpg" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/15.jpg" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Bird</p>
                                    <h5 class="text-white mb-0">Peacock</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="animal-item" href="img/24.jpg" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/24.jpg" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                    <h5 class="text-white mb-0">Squrell</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Animal End -->
<!-- Membership Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span>Packages</p>
                <h1 class="display-5 mb-0">You Can Be A Proud Member Of <span class="text-primary">Nature</span></h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="service_details.php">Packages</a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="membership-item position-relative">
                    <img class="img" src="img/12.jpg" alt="">
                    <h1 class="display-1">1</h1>
                    <h4 class="text-white mb-3">Jeep Morning 1</h4>
                    <h3 class="text-primary mb-4">₹ 2500</h3>
                    <p><i class="fa fa-check text-primary me-3"></i>Days : T-W-S-S</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Timing : Days : 06:00:00</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Contact : 98245 25835</p>
                    <a class="btn btn-outline-light px-4 mt-3" href="membership.php">Get Started</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">

                <div class="membership-item position-relative">
                    <img class="img" src="img/13.jpg" alt="">
                    <h1 class="display-1">2</h1>
                    <h4 class="text-white mb-3">Jeep Morning 2</h4>
                    <h3 class="text-primary mb-4">₹ 2500</h3>
                    <p><i class="fa fa-check text-primary me-3"></i>Days : T-W-T-F-S-S</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Timing : Days : 08:15:00
                    </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Contact : 97832 75632
                    </p>
                    <a class="btn btn-outline-light px-4 mt-3" href="membership.php">Get Started</a>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">

                <div class="membership-item position-relative">
                    <img class="img" src="img/14.jpg" alt="">
                    <h1 class="display-1">3</h1>
                    <h4 class="text-white mb-3">Jeep After Sunrise</h4>
                    <h3 class="text-primary mb-4">₹ 2500</h3>
                    <p><i class="fa fa-check text-primary me-3"></i>Days : T-W-T-F-S-S</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Timing : Days : 08:00:00?>
                    </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Contact : 97832 75632
                    </p>
                    <a class="btn btn-outline-light px-4 mt-3" href="membership.php">Get Started</a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php
                $query = "Select r.*,u.*,s.* from reviews r,users u,safaris s where r.userId = u.userId and r.userId = s.safId ";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/logo/rv.png"
                    onerror='this.src="img/logo/rv.jpg"' style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>
                        <?php print $row['reviewComment']; ?>
                    </p>
                    <h5 class="mb-1">
                        <?php print str_repeat("<i class='fa fa-star'></i>", $row['reviewStar']); ?>

                    </h5>
                    <span class="fst-italic">
                        <?php print $row['userName'] ?>
                    </span>
                </div>
            </div>
            <?php
                }
                ?>
        </div>
    </div>
</div>

<!-- Testimonial End -->


<?php include("inc/footer.php"); ?>