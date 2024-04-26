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

$galId = $_GET["galId"];

$query = "select * from gallers where galId='$galId'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

?>


<h1 class="text-center mt-5 mb-5 text-primary ">Gallery Edit
</h1>

<br>

<div class="container">
    <form action="admin-gallers-edit.php?galId=<?php echo $galId; ?>" method="post" enctype="multipart/form-data">
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="galId" value="<?php echo $row['galId']; ?>" name="galId" placeholder="Gallery Id">
                    <label for="galId">Gallery Id</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-5">
            <div class="col-md-6">
                <div class="form-floating">
                    <select name="safId" class="form-control bg-light border-5" id="safId">
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
                    <input type="file" class="form-control bg-light border-5" id="galURl" value="<?php echo $row['galURl']; ?>" name="galURl" placeholder="Gallery URl">
                    <label for="galURl">Gallery URl</label>
                </div>
            </div>
        </div>
        <br>

        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="gelTitle" value="<?php echo $row['gelTitle']; ?>" name="gelTitle" placeholder="Enter Title">
                    <label for="gelTitle">Gallery Title</label>
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
    $galId = $_POST['galId'];
    $safId = $_POST['safId'];
    $gelTitle = $_POST['gelTitle'];
    $galURl = $_FILES["galURl"]["name"];

    // echo "<script> alert('rc ".$galURl."Inserted')</script>";

    $source = $_FILES["galURl"]["tmp_name"];
    $dest = $_FILES["galURl"]["name"];

    move_uploaded_file($source, $dest);

    // echo $galURl;
    // echo $gelTitle;



    // $query="insert into gallers(safId,galURl,gelTitle) values('$safId','$galURl','$gelTitle')";


    $query = "update gallers set safId='$safId',galURl='$galURl',gelTitle='$gelTitle' where galId='$galId'";
    $result = mysqli_query($con, $query);


    if (!$result) {
        echo mysqli_error($con);
    } else {
        echo "<script>alert('Record Updated successfully')</script>";
    }
}
?>



<?php include("inc/footer.php"); ?>