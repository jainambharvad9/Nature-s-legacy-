<?php include("inc/admin-add-main-nev.php"); 

if (!isset($_SESSION['admin'])) {
    ?>
    <script>
         window.location.href="login.php";  
    </script>
    <?php
} ?>


<?php include("inc/connection.php");
if (isset($_GET['catId'])) {
    $catId = $_GET['catId'];
    $qdelete = "delete from categorys where catId=$catId";
    $result = mysqli_query($con, $qdelete);
    if ($result) {
        echo "<script> window.location.href='admin-categorys-view.php' </script>";
    }
}


?>

<h1 class="text-center mt-5 mb-5 text-primary ">Category View
</h1>

<div class="container">
    <div class="col-md-12 text-light wow fadeIn" data-wow-delay="0.5s">
        <table class="table">

            <thead>
                <tr>
                    <th>Category Id</th>
                    <th>Category Name</th>
                    <th>Category Img</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "Select * from categorys";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['catId'] ?></td>
                        <td><?php echo $row['catName'] ?> </td>
                        <td><img onerror='this.src="img/logo/logo1.png"' src="<?php echo "img/" . $row['catImg']; ?>" height="80px" width="100px" /> </td>
                        <td>
                            <a href="admin-categorys-edit.php?catId=<?php echo $row['catId'] ?>">
                                <button type="button" class="btn btn-primary" value="Edit">Edit</button>
                            </a>
                            <a onclick='return confirm ("Do You want to delete this?")' href="admin-categorys-view.php?catId=<?php echo $row['catId'] ?>">
                                <button type="button" class="btn btn-danger" value="Delete">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>

        </table>
    </div>
</div>

<?php include("inc/footer.php"); ?>