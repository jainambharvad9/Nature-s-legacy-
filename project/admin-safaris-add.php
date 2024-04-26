<?php include("inc/connection.php"); ?>

<?php
if (isset($_POST['submit'])) {

    $safName = $_POST['safName'];
    $safDay = $_POST['safDay'];
    $mobileNumber = $_POST['mobileNumber'];
    $safPrice = $_POST['safPrice'];
    $safTime = $_POST['safTime'];
    $catId = $_POST['catId'];
    $catImg = $_FILES["catImg"]["name"];

    move_uploaded_file($_FILES["catImg"]["tmp_name"], "catImages/" . $_FILES["catImg"]["name"]);
    $query = "insert into safaris(safName,safDay,mobileNumber,safPrice,safTime,catId,catImg) values('$safName','$safDay','$mobileNumber','$safPrice','$safTime','$catId','$catImg')";
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
    }?>
<br>
<h1 class="text-center mt-5 mb-5 text-primary ">Safari Add</h1>

<div class="container">
    <form action="admin-safaris-add.php" method="post" enctype="multipart/form-data">
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" name="safName" id="safName" placeholder="Safari Name">
                    <label for="safName">Safari Name</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="safDay" name="safDay" placeholder="Safari Day">
                    <label for="safDay">Safari Day</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="mobileNumber" name="mobileNumber" placeholder="Mobile Number">
                    <label for="mobileNumber">Mobile Number</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="safPrice" name="safPrice" placeholder="Safari Price">
                    <label for="safPrice">Safari Price</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="time" class="form-control bg-light border-5" id="safTime" name="safTime" placeholder="Safari Time">
                    <label for="safTime">Safari Time</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-5">
            <div class="col-md-6">
                <div class="form-floating">

                    <select  style="height: 10%;" name="catId" class="form-control bg-light border-5" id="catId">
                        <?php
                        $queryCat = "Select * from categorys";
                        $resultCat = mysqli_query($con, $queryCat);
                        while ($rowCat = mysqli_fetch_array($resultCat)) {
                        ?>
                            <option value="<?php echo $rowCat['catId'] ?>">
                                <?php echo $rowCat['catName'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>

                    <label style="height: 10%;" for="catId">Category Name </label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="file" class="form-control bg-light border-5" id="catImg" name="catImg" placeholder="Category Img">
                    <label for="catImg">Category Img</label>
                </div>
            </div>
        </div>
        <br>
        <div class="col-2">
            <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Submit</button>
        </div>
    </form>
</div>
<?php include("inc/footer.php") ?>