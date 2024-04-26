<?php include("inc/connection.php"); ?>

<?php
if (isset($_POST['submit'])) {

    $safId = $_POST['safId'];
    $vidURl = $_POST['vidURl'];
    $vidTitle = $_POST['vidTitle'];
    $query = "insert into videos(safId,vidURl,vidTitle) values('$safId','$vidURl','$vidTitle')";
    $result = mysqli_query($con, $query);
    echo "<script> alert('Record Inserted')</script>";
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
<br>
<h1 class="text-center mt-5 mb-5 text-primary ">Videos Add</h1>

<br>
<div class="container">
    <form action="" method="post">
        <div class="row-5">
            <div class="col-md-6">
                <div class="form-floating">
                    <select style="height: 10%;" name="safId" class="form-control bg-light border-5" id="safId">
                        <?php
                        $queryCat = "Select * from safaris";
                        $resultCat = mysqli_query($con, $queryCat);
                        while ($rowCat = mysqli_fetch_array($resultCat)) {
                        ?>
                            <option value="<?php echo $rowCat['safId'] ?>">
                                <?php echo $rowCat['safName'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                    <label for="catId">Safari Name </label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="vidURl" name="vidURl" placeholder="vidURl">
                    <label for="vidURl">Video URl</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="vidTitle" name="vidTitle" placeholder="Enter title ">
                    <label for="vidTitle">Video Title</label>
                </div>
            </div>
        </div>
        <br>
        <div class="col-2">
            <button class="btn btn-primary w-100 py-3" name="submit" id="submit" type="submit">Submit</button>
        </div>
    </form>
</div>
<?php include("inc/footer.php") ?>