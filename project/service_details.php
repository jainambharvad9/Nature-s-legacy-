<?php

include("inc/connection.php");
include("inc/main-nev.php");


$safId = $_GET['safId'];

$query = "Select s.*,c.catName from safaris s,categorys c where s.catId=c.catId and safId=$safId";
$result = mysqli_query($con, $query);
$c = 0;
$row = mysqli_fetch_array($result);

?>

<!-- Page Header Start -->
<div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown">Membership</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Membership</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Membership Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span>
                    <?php print $row['safName'] ?>
                </p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6 ">
                <div class="">
                    <img class="img-fluid" src="catImages/<?php print $row['catImg'] ?>" alt="">
                    <h4 class="text-white mb-3">
                        <?php print $row['safName'] ?>
                    </h4>
                    <h3 class="text-primary mb-4">₹
                        <?php print $row['safPrice'] ?>
                    </h3>
                    <p><i class="fa fa-check text-primary me-3"></i>Days :
                        <?php print $row['safDay'] ?>
                    </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Timing : Days :
                        <?php print $row['safTime'] ?>
                    </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Contact :
                        <?php print $row['mobileNumber'] ?>
                    </p>

                </div>
                <br>
            </div>


            <?php
            if (isset($_POST['submit'])) {

                $userId = $_SESSION['users']['userId'];
                // echo $userName;
                date_default_timezone_set("Asia/Kolkata");
                $bookingDate = date("Y\-m\-d", strtotime($_POST['bookingDate']));

                $checkinDate = date("Y\-m\-d", strtotime($_POST['checkinDate']));
                $checkoutDate = date("Y\-m\-d", strtotime($_POST['checkoutDate']));

                $mobileNumber = $_POST['mobileNumber'];
                $uname = $_POST['userName'];

                // echo $bookingDate;
                // echo "<br>".$checkinDate;
                // echo "<br>".$checkoutDate;
                // echo "<br>".$mobileNumber;
                $query_b = "insert into bookings(userId,bookingDate,checkinDate,checkoutDate,mobileNumber,safId) values('$userId','$bookingDate','$checkinDate','$checkoutDate','$mobileNumber','$_REQUEST[safId]')";
                $result_b = mysqli_query($con, $query_b);
                // echo "<script> alert('Booking Successfully')</script>";

                if ($result_b) {

            ?>
                    <script>
                        swal({
                            title: "Booking Successfully",
                            text: "Thank You for Booking <?php echo $uname; ?>",
                            icon: "success",
                            button: false,
                        });
                        setTimeout(st, 2000)

                        function st() {
                            window.location.href = 'thankyoupage.php'
                        }
                    </script>
            <?php
                } else {
                    echo "Cancle";
                }
            }
            ?>
            <div class="col-lg-8 justify-content-center align-items-center  ">
                <div class="title">
                    <h1 class=" mb-3 text-primary ">Booking</h1>
                </div>
                <form method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control bg-light border-5" id="bookingDate" name="bookingDate" value="<?php echo date("Y-m-d"); ?>" min="<?php echo date("Y-m-d"); ?>" placeholder="bookingDate">
                                <!-- <input type="date" value="<?php echo date("Y-m-d"); ?>" min="<?php echo date("Y-m-d"); ?>"> -->
                                <label for="bookingDate">Booking Date</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control bg-light border-5" id="checkinDate" name="checkinDate" min="<?php echo date("Y-m-d"); ?>" placeholder="Check in Date">
                                <label for="checkinDate">Chaeck in Date</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control bg-light border-5" id="checkoutDate" name="checkoutDate" min="<?php echo date("Y-m-d"); ?>" placeholder="Check out Date">
                                <label for="checkoutDate">Check out Date</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="E-mail" class="form-control bg-light border-5" id="mobileNumber" name="mobileNumber" placeholder="Mobile number">
                                <label for="mobileNumber">Mobile number</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <?php
                            if (isset($_SESSION['users'])) {
                            ?>

                                <input class="btn btn-primary w-100 py-3" type="submit" name="submit" value="Book Now">
                            <?php
                            } else {

                            ?>
                                <a href="login.php" class="btn btn-primary p-3 ">Click to login for booking</a>
                            <?php } ?>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <div class="row g-4 d-flex justify-content-center align-items-center ">
            <?php
            $queryG = "Select g.* from gallers g where safId=$safId";
            $resultG = mysqli_query($con, $queryG);
            while ($rowG = mysqli_fetch_array($resultG)) {
            ?>
                <div class="col-lg-4 col-md-4  ">
                    <img class="" width="380px" height="300px" src="<?php echo "img/" . $rowG['galURl']; ?>" alt="">
                    <!-- <h4 class=" text-center text-primary mb-3">
                         <?php print $rowG['gelTitle'] ?>
                    </h4> -->
                </div>
            <?php } ?>
        </div>
<br>
        <div class="row g-4">
            <?php
            $query_v = "Select v.*,s.* from videos v,safaris s where v.safId = s.safId and v.safId='$_REQUEST[safId]'";
            $result_v = mysqli_query($con, $query_v);
            while ($row_v = mysqli_fetch_array($result_v)) {
            ?>
                <div class="col-md-2 col-lg-2 offset-3 ">
                    <div class="h-100" style="min-height: 400px;">
                        <iframe width="600" height="450" src="<?php print $row_v['vidURl'] ?>" title="YouTube video player" frameborder="5" al low="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <!-- <h3 class="text-center text-primary">
                        <?php print $row_v['vidTitle'] ?>
                    </h3> -->
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <br>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php
                $query = "Select r.*,u.*,s.* from reviews r,users u,safaris s where r.userId = u.userId and r.userId = s.safId ";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/logo/rv.png" onerror='this.src="img/logo/rv.jpg"' style="width: 100px; height: 100px;">
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
</div>
</div>

<?php
if (isset($_POST['star'])) {

    $userId = $_SESSION['users']['userId'];
    $reviewComment = $_POST['reviewComment'];
    $reviewStar = $_POST['reviewStar'];
    $safId = $_GET['safId'];
    // echo $reviewComment;
    // echo $reviewStar;
    $query = "insert into reviews(userId,safId,reviewComment,reviewStar) values('$userId','$safId','$reviewComment','$reviewStar')";

    $result = mysqli_query($con, $query);

    echo mysqli_error($con);

    // echo "<script> alert('Record Inserted')</script>";


}
?>

<!-- Review Form -->
<div class="container">
    <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <form method="post">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control bg-light border-5" name="reviewComment" placeholder="Leave a Comment here" id="message" style="height: 150px"></textarea>
                            <label for="Comment">Comment</label>
                        </div>
                        <br>
                        <div class="form-floating">

                            <select name="reviewStar">
                                <option value="5"> 5 Star </option>
                                <option value="4"> 4 Star </option>
                                <option value="3"> 3 Star</option>
                                <option value="2"> 2 Star </option>
                                <option value="1"> 1 Star </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <input class="btn btn-primary w-100 py-3" name="star" type="submit" value="Send Review">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Review End -->






<?php include("inc/footer.php"); ?>