<?php include("inc/main-nev.php");
include("inc/connection.php");
?>

<!-- Page Header Start -->
<div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown">FAQs</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">FAQs</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->



<!-- Page Faq End -->




<div class="container-xxl wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">

            <?php
            $query = "Select * from faqs";
            $result = mysqli_query($con, $query);
            $c = 0;
            while ($row = mysqli_fetch_array($result)) {
                $c++;
            ?>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <h4 class=" card-title text-primary display-6 "> <b class=" text-primary "> <?php print $c  ?> </b>
                    <?php print $row['faqQuestions'] ?></h4>
                <p class=" text-bg-danger " style="text-align:justify; font-size:25px;"> 
                    <?php print $row['faqAns'] ?></p>
                <p class="text-bg-danger  " style="text-align:justify; font-size:25px;"> <b>Note:</b>
                    <?php print $row['faqNote'] ?></p>
            </div>
            <?php } ?>

        </div>
    </div>
</div>


<!-- Page Faq End -->







<!-- Visiting Hours Start -->
<div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-white mb-5">Visiting Hours</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span>Monday</span>
                        <span>Closed</span>
                    </li>
                    <li class="list-group-item">
                        <span>Tuesday</span>
                        <span>9:00AM - 8:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Wednesday</span>
                        <span>9:00AM - 8:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Thursday</span>
                        <span>9:00AM - 8:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Friday</span>
                        <span>9:00AM - 8:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Saturday</span>
                        <span>9:00AM - 8:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Sunday</span>
                        <span>9:00AM - 8:00PM</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 text-white mb-5">Contact Info</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Office</td>
                            <td>123 Street, Gir, Gujarat</td>
                        </tr>
                        <tr>
                            <td>Zoo</td>
                            <td>123 Street, Gir, Gujarat</td>
                        </tr>
                        <tr>
                            <td>Ticket</td>
                            <td>
                                <p class="mb-2">+91 9998 173 929</p>
                                <p class="mb-0">natureslegacy@gmail.com</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Support</td>
                            <td>
                                <p class="mb-2">+91 7878 012 124</p>
                                <p class="mb-0">natureslegacysupport@gmail.com</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Visiting Hours End -->


<?php include("inc/footer.php"); ?>