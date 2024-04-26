<?php 

include("inc/connection.php") ;
include("inc/main-nev.php") ;

?>

    <!-- Page Header Start -->
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Packages</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="about.php">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Packages</li>
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
                    <p><span class="text-primary me-2">#</span>Packages</p>
                    <h1 class="display-5 mb-0">You Can Be A Proud Member Of <span class="text-primary">Nature</span></h1>
                </div>
                <!-- <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Packages</a>
                </div> -->
            </div>

            <div class="row g-4">

            <?php
                $query = "Select s.*,c.catName from safaris s,categorys c where s.catId=c.catId";
                $result = mysqli_query($con, $query);
                $c=0;
                while ($row = mysqli_fetch_array($result)) {
                    $c++;
            ?>


                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="membership-item position-relative">
                        <img class="img" src="catImages/<?php print $row['catImg']?>" alt="">
                        <h1 class="display-1"><?php print $c; ?></h1>
                        <h4 class="text-white mb-3"><?php print $row['safName']?></h4>
                        <h3 class="text-primary mb-4">₹ <?php print $row['safPrice']?></h3>
                        <p><i class="fa fa-check text-primary me-3"></i>Days : <?php print $row['safDay']?></p>
                        <p><i class="fa fa-check text-primary me-3"></i>Timing : Days : <?php print $row['safTime']?></p>
                        <p><i class="fa fa-check text-primary me-3"></i>Contact : <?php print $row['mobileNumber']?> </p>
                        <a class="btn btn-outline-light px-4 mt-3" href="service_details.php?safId=<?php print  $row['safId'];?>">Get Started</a>
                    </div>
                </div>
            <?php 
                }
            ?>
               
            </div>
        </div>
    </div>
    <!-- Membership End -->
        
    <?php include("inc/footer.php");?>