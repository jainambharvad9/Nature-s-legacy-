<?php include("inc/main-nev.php");
include("inc/connection.php");?>

<!-- Page Header Start -->
<div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<?php
if (isset($_POST['submit'])) {

    $yname = $_POST['yname'];
    $yemail = $_POST['yemail'];
    $ysubject = $_POST['ysubject'];
    $ymessage = $_POST['ymessage'];
    $query = "insert into feedbacks(yname,yemail,ysubject,ymessage) values('$yname','$yemail','$ysubject','$ymessage')";
    $result = mysqli_query($con, $query);
    ?>
            <script>
                // swal("Good job!", "You clicked the button!", "success");
                swal({
                    title: "Successfully Send Message ",
                    text: "Thank You For Feedback",
                    icon: "success",
                    button: false,
                });
            </script>
        <?php
}

?>

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="h-100 bg-light d-flex align-items-center p-5">
                    <div class="btn-lg-square bg-white flex-shrink-0">
                        <i class="fa fa-map-marker-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2"><span class="text-primary me-2">#</span>Address</p>
                        <h5 class="mb-0">Sasan Gir, Gujarat, India</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="h-100 bg-light d-flex align-items-center p-5">
                    <div class="btn-lg-square bg-white flex-shrink-0">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2"><span class="text-primary me-2">#</span>Call Now</p>
                        <h5 class="mb-0">+91 1234 567 890</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100 bg-light d-flex align-items-center p-5">
                    <div class="btn-lg-square bg-white flex-shrink-0">
                        <i class="fa fa-envelope-open text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2"><span class="text-primary me-2">#</span>Mail Now</p>
                        <h5 class="mb-0">natureslegacy@gmil.com</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p><span class="text-primary me-2">#</span>Contact Us</p>
                <h1 class="display-5 mb-4">Have Any Query? Please Contact Us!</h1>
                <form method="post" >
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-5" id="name" name="yname" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control bg-light border-5" name="yemail" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-5" name="ysubject" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control bg-light border-5" name="ymessage" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100" style="min-height: 400px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d952071.9204995777!2d70.05583946734991!3d21.26171862815086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be2b7ae8f70e761%3A0x6978b3f06400e721!2sGir%20National%20Park!5e0!3m2!1sen!2sin!4v1692275909731!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<?php include("inc/footer.php"); ?>