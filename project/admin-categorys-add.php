<?php include("inc/connection.php");




?>

<?php
$message = "";
if (isset($_POST['submit'])) {

    $catName = $_POST['catName'];
    $catImg = $_FILES["catImg"]["name"];
    // echo $catName;
    // echo "<script> alert('rc ".$catImg."Inserted')</script>";

    $source = $_FILES["catImg"]["tmp_name"];
    $dest = $_FILES["catImg"]["name"];

    move_uploaded_file($source, $dest);

    $query = "insert into categorys(catName,catImg) values('$catName','$dest')";
    $result = mysqli_query($con, $query);
    $message = "Record Inserted";
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

<?php

if ($message != "") {
    echo '<div class="alert alert-success" role="alert">' . $message
        . '</div>';
}
?>

<h1 class="text-center mt-5 mb-5 text-primary ">Category Add
</h1>
<div class="container">
    <form action="admin-categorys-add.php" method="post" enctype="multipart/form-data">
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input style="height: 10%;" type="text" class="form-control bg-light border-5" id="catName" name="catName" placeholder="Category Name">
                    <label for="catName">Category Name</label>
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
            <button class="btn btn-primary w-100 py-3" id="submit" name="submit" type="submit">Submit</button>
        </div>


    </form>
</div>

<?php include("inc/footer.php"); ?>