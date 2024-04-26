<?php include("inc/connection.php"); ?>

<?php
if (isset($_POST['submit'])) {

    $faqQuestions = $_POST['faqQuestions'];
    $faqAns = $_POST['faqAns'];
    $faqNote = $_POST['faqNote'];

    $query = "insert into faqs(faqQuestions,faqAns,faqNote) values('$faqQuestions','$faqAns','$faqNote')";
    $result = mysqli_query($con, $query);
    echo "<script> alert('rc Inserted')</script>";
}


?>

<?php include("inc/admin-add-main-nev.php");
if (!isset($_SESSION['admin'])) {
?>
    <script>
        window.location.href = "login.php";
    </script>
<?php
} ?>
<h1 class="text-center mt-5 mb-5 text-primary ">Faq Add
</h1>
<br>
<div class="container">
    <form action="admin-faqs-add.php" method="post">
        <div class="row-12">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="faqQuestions" name="faqQuestions" placeholder="Faq Question">
                    <label for="faqQuestions">Faq Question</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input style="height: 20%;" type="text" class="form-control bg-light border-5" id="faqAns" name="faqAns" placeholder="Faq Answer">
                    <label for="faqAns">Faq Answer</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input style="height: 30%;" type="text" class="form-control bg-light border-5" id="faqNote" name="faqNote" placeholder="Faq Some important Note">
                    <label for="faqNote">Faq Some important Note</label>
                </div>
            </div>
            <br>
            <div class="col-2">
                <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php include("inc/footer.php"); ?>