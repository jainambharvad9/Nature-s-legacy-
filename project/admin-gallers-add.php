<?php include("inc/connection.php"); ?>

<?php
$message = "";
if (isset($_POST['submit'])) {

    $safId = $_POST['safId'];
    $gelTitle = $_POST['gelTitle'];
    $galURl = $_FILES["galURl"]["name"];
    $source = $_FILES["galURl"]["tmp_name"];
    $dest = $_FILES["galURl"]["name"];
    move_uploaded_file($source, $dest);
    $query = "insert into gallers(safId,galURl,gelTitle) values('$safId','$dest','$gelTitle')";

    $result = mysqli_query($con, $query);
    $message = "Record Inserted Successfully";
}


?>




<?php include("inc/admin-add-main-nev.php");

if (!isset($_SESSION['admin'])) {
?>
    <script>
        window.location.href = "login.php";
    </script>
<?php
}
?>



<h1 class="text-center mt-5 mb-5 text-primary ">Gallery Add
</h1>
<br>
<div class="container">
    <form action="admin-gallers-add.php" method="post" enctype="multipart/form-data">
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
                <div class="form-floating ">
                    <input type="file" class="form-control bg-light border-5" id="galURl" name="galURl" placeholder="Gallery URl">
                    <label for="galURl">Gallery URl</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="gelTitle" name="gelTitle" placeholder="Enter title ">
                    <label for="gelTitle">Enter Title</label>

                </div>
            </div>
        </div>
        <br>
        <div class="col-2">
            <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Submit</button>
        </div>
    </form>
</div>
<br>
<?php

if ($message != "") {
    echo '<div class="alert alert-success" role="alert">' . $message
        . '</div>';
}
?>

<?php include("inc/footer.php") ?>