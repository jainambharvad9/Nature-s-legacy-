<?php include("inc/connection.php");

if (isset($_GET['reviewID'])) {
    $reviewID = $_GET['reviewID'];
    $qdelete = "delete from reviews where reviewID=$reviewID";
    $result = mysqli_query($con, $qdelete);
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
<h1 class="text-center mt-5 mb-5 text-primary ">Review View</h1>

<div class="container">
    <div class="col-md-12 text-light wow fadeIn" data-wow-delay="0.5s">
        <h1 class="display-6 text-white mb-5">Contact Info</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Review ID</th>
                    <th>Review Comment</th>
                    <th>Review Star</th>
                    <th>User Id</th>
                    <th>Safari Id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // $query = "Select * from reviews";
                $query = "Select r.*,u.*,s.* from reviews r,users u,safaris s where r.userId = u.userId and r.userId = s.safId ";

                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['reviewID'] ?></td>
                        <td><?php echo $row['reviewComment'] ?> </td>
                        <td><?php echo $row['reviewStar'] ?> </td>
                        <td><?php echo $row['userName'] ?> </td>
                        <td><?php echo $row['safName'] ?> </td>
                        <td>
                            <!-- <button type="button" class="btn btn-primary" value="Edit">Edit</button> -->
                            <a onclick='return confirm ("Do You want to delete this?")' href="admin-reviews-view.php?reviewID=<?php echo $row['reviewID'] ?>"> <button type="button" class="btn btn-danger" value="Delete">Delete</button></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include("inc/footer.php") ?>