<?php include("inc/admin-add-main-nev.php");

if (!isset($_SESSION['admin'])) {
    ?>
        <script>
            window.location.href = "login.php";
        </script>
    <?php
    }?>
<?php include("inc/connection.php");

?>

<?php

$safId = $_GET["safId"];

$query = "select * from safaris where safId='$safId'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

?>
<h1 class="text-center mt-5 mb-5 text-primary ">Safari Edit</h1>

<div class="container">
    <form action="admin-safaris-edit.php?safId=<?php echo $safId; ?>" method="post" enctype="multipart/form-data">
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" name="safId" value="<?php echo $row['safId']; ?>" id="safId" placeholder="Safari Id">
                    <label for="safName">Safari Id</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" name="safName" value="<?php echo $row['safName']; ?>" id="safName" placeholder="Safari Name">
                    <label for="safName">Safari Name</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="mobileNumber" value="<?php echo $row['mobileNumber']; ?>" name="mobileNumber" placeholder="Mobile Number">
                    <label for="safDay">Mobile Number</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" id="safDay" value="<?php echo $row['safDay']; ?>" name="safDay" placeholder="Sufari Day">
                    <label for="mobileNumber">Safari day</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-5" value="<?php echo $row['safPrice']; ?>" id="safPrice" name="safPrice" placeholder="Safari Price">
                    <label for="safPrice">Safari Price</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="time" class="form-control bg-light border-5" value="<?php echo $row['safTime']; ?>" id="safTime" name="safTime" placeholder="Safari Time">
                    <label for="safTime">Safari Time</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-5">
            <div class="col-md-6">
                <div class="form-floating">

                    <select style="height: 10%;" name="catId" class="form-control bg-light border-5" id="catId">
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

                    <label for="catId">Category Name </label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="file" class="form-control bg-light border-5" id="catImg" name="catImg" placeholder="Category Img">
                    <input type="hidden" name="oldImg" value="<?php echo $row['catImg']; ?>" />
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
<?php
if (isset($_POST['submit'])) {
    $safId = $_POST['safId'];
    $safName = $_POST['safName'];
    $mobileNumber = $_POST['mobileNumber'];
    $safDay = $_POST['safDay'];
    $safPrice = $_POST['safPrice'];
    $safTime = $_POST['safTime'];
    $catId = $_POST['catId'];
    $catImg = $_FILES['catImg']["name"];
    $oldImg = $_POST["oldImg"];
    $flag = "0";
    if ($catImg == "") {
        $query = "update safaris set safName='$safName',mobileNumber='$mobileNumber',safDay='$safDay',safPrice='$safPrice',safTime='$safTime',catId='$catId',catImg='$oldImg' where safId='$safId'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $flag = "1";
        }
    } else {
        $query = "update safaris set safName='$safName',mobileNumber='$mobileNumber',safDay='$safDay',safPrice='$safPrice',safTime='$safTime',catId='$catId',catImg='$catImg' where safId='$safId'";
        $result = mysqli_query($con, $query);
        move_uploaded_file($_FILES["catImg"]["tmp_name"], "catImages/" . $catImg);
        if ($result) {
            $flag = "1";
        }
    }


    if ($flag == "1") {
        echo "<script>alert('Record Updated successfully')</script>";
    } else {
        echo mysqli_error($con);
    }
}
?>
<?php include("inc/footer.php") ?>