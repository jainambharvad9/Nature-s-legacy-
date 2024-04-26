<?php include("inc/admin-add-main-nev.php"); 

if (!isset($_SESSION['admin'])) {
    ?>
    <script>
         window.location.href="login.php";  
    </script>
    <?php
} ?>


?>
<?php include("inc/connection.php"); ?>



<?php

$catId = $_GET["catId"];

$query = "select * from categorys where catId='$catId'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

?>

<h1 class="text-center mt-5 mb-5 text-primary ">Category Edit
</h1>

<br>

<div class="container">
    <form action="admin-categorys-edit.php?catId=<?php echo $catId; ?>" method="post" enctype="multipart/form-data">
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="catId"
                        value="<?php echo $row['catId']; ?>" name="catId" placeholder="Category Id">
                    <label for="catId">Category Id</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="catName"
                        value="<?php echo $row['catName']; ?>" name="catName" placeholder="Category Name">
                    <label for="catName">Category Name</label>
                </div>
            </div>
        </div><br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="file" class="form-control bg-light border-5" id="catImg" name="catImg"
                        placeholder="Category Img">
                    <input type="hidden" name="oldImg" value="<?php echo $row['catImg']; ?>" />
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




<?php
if (isset($_POST['submit'])) {
    //echo "ok";
    $catId = $_POST['catId'];
    $catName = $_POST['catName'];

    // echo $catId;
    //echo $catName;
    $catImg = $_FILES['catImg']["name"];

    //echo $catImg;

    $oldImg = $_POST["oldImg"];
    //echo $oldImg;
    $flag = "0";
    if ($catImg == "") {
        $query = "update categorys set catId='$catId',catName='$catName',catImg='$oldImg' where catId='$catId'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $flag = "1";
        }
    } else {
        $query = "update categorys set catId='$catId',catName='$catName',catImg='$catImg' where catId='$catId'";
        $result = mysqli_query($con, $query);
        move_uploaded_file($_FILES["catImg"]["tmp_name"], "catImages/" . $catImg);
        if ($result) {
            $flag = "1";
        }
    }


    if ($flag == "1") {
        echo "<script>alert('Record Updated successfully')</script>";
        echo "<script>window.location.href='admin-categorys-view.php' </script>";
    } else {
        echo mysqli_error($con);
    }
}
?>



<?php include("inc/footer.php"); ?>