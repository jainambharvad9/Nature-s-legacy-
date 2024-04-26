<?php include("inc/admin-add-main-nev.php");

if (!isset($_SESSION['admin'])) {
?>
    <script>
        window.location.href = "login.php";
    </script>
<?php
} ?>
<?php include("inc/connection.php"); ?>

<?php

$vidID = $_GET["vidID"];

$query = "select * from videos where vidID='$vidID'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

?>


<h1 class="text-center mt-5 mb-5 text-primary ">Video Edit
</h1>

<br>

<div class="container">
    <form action="admin-videos-edit.php?vidID=<?php echo $vidID; ?>" method="post" enctype="multipart/form-data">
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="vidID" value="<?php echo $row['vidID']; ?>" name="vidID" placeholder="Video Id">
                    <label for="vidID">Video Id</label>
                </div>
            </div>
        </div>
        <br>
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
                    <label for="safId">Safari Name </label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="vidURl" value="<?php echo htmlentities($row['vidURl']); ?>" name="vidURl" placeholder="Video URl">

                    <label for="vidURl">Video URl</label>
                </div>
            </div>
        </div>
        <br>

        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="vidTitle" value="<?php echo $row['vidTitle']; ?>" name="vidTitle" placeholder="Enter Title">
                    <label for="vidTitle">Video Title</label>
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
    $vidID = $_POST['vidID'];
    $safId = $_POST['safId'];
    $vidURl = mysqli_escape_string($con, $_POST['vidURl']);
    $vidTitle = $_POST["vidTitle"];
    $query = "update videos set safId='$safId',vidURl='$vidURl',vidTitle='$vidTitle' where vidID='$vidID'";
    $result = mysqli_query($con, $query);
    if (!$result) {
        echo mysqli_error($con);
    } else {

        echo "<script>alert('Record Updated successfully')</script>";
    }
}
?>



<?php include("inc/footer.php"); ?>