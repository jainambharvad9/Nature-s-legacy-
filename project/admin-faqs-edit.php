<?php include("inc/admin-add-main-nev.php");
if (!isset($_SESSION['admin'])) {
?>
    <script>
        window.location.href = "login.php";
    </script>
<?php
} ?>
<?php include("inc/connection.php");



?>



<?php

$faqId = $_GET["faqId"];

$query = "select * from faqs where faqId='$faqId'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

?>

<h1 class="text-center mt-5 mb-5 text-primary ">Faq Edit
</h1>

<br>

<div class="container">
    <form action="admin-faqs-edit.php?faqId=<?php echo $faqId; ?>" method="post" enctype="multipart/form-data">
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="faqId" value="<?php echo $row['faqId']; ?>" name="faqId" placeholder="Faq Id">
                    <label for="faqId">Faq Id</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="faqQuestions" value="<?php echo $row['faqQuestions']; ?>" name="faqQuestions" placeholder="Faq Questions">

                    <label for="faqQuestions">Faq Questions</label>
                </div>
            </div>
        </div>
        <br>

        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="faqAns" value="<?php echo $row['faqAns']; ?>" name="faqAns" placeholder="Faq Ans">

                    <label for="faqAns">Faq Ans</label>
                </div>
            </div>
        </div>
        <br>

        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating  ">
                    <input type="text" class="form-control bg-light border-5" id="faqNote" value="<?php echo $row['faqNote']; ?>" name="faqNote" placeholder="Faq Some important Note">

                    <label for="faqNote">Faq Some important Note</label>
                </div>
            </div>
        </div>
        <br>

        <div class="col-2">
            <button class="btn btn-primary w-100 py-3" id="submit" name="submit" type="submit">Submit</button>
        </div>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    //echo "ok";
    $faqId = $_POST['faqId'];
    $faqQuestions = $_POST['faqQuestions'];
    // echo $catId;
    //echo $catName;
    $faqAns = $_POST['faqAns'];
    //echo $catImg;
    $faqNote = $_POST["faqNote"];
    $query = "update faqs set faqQuestions='$faqQuestions',faqAns='$faqAns',faqNote='$faqNote' where faqId='$faqId'";
    $result = mysqli_query($con, $query);


    if (!$result) {
        echo mysqli_error($con);
    } else {

        echo "<script>alert('Record Updated successfully')</script>";
    }
}
?>

<?php include("inc/footer.php"); ?>