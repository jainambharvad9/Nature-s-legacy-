<?php include("inc/connection.php"); ?>
<?php include("inc/admin-add-main-nev.php");

if (isset($_GET['vidID'])) {
    $vidID = $_GET['vidID'];
    $qdelete = "delete from videos where vidID=$vidID";
    $result = mysqli_query($con, $qdelete);
}

if (!isset($_SESSION['admin'])) {
    ?>
    <script>
         window.location.href="login.php";  
    </script>
    <?php
} ?>


<div class="container">
    <br>
    <h1 class="text-center mt-5 mb-5 text-primary ">Video View</h1>

    <div class="col-md-12 text-light wow fadeIn" data-wow-delay="0.5s">
        <table class="table">
            <thead>
                <tr>
                    <th>Video ID</th>
                    <th>Safari Id</th>
                    <th>Video URl</th>
                    <th>Video Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "Select v.*,s.* from videos v,safaris s where v.safId = s.safId ";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['vidID'] ?></td>
                        <td><?php echo $row['safName'] ?> </td>
                        <td><?php echo $row['vidURl'] ?> </td>
                        <td><?php echo $row['vidTitle'] ?> </td>
                        <td>
                            <a href="admin-videos-edit.php?vidID=<?php echo $row['vidID'] ?>">
                                <button type="button" class="btn btn-primary" value="Edit">Edit</button>
                            </a>
                            <a onclick='return confirm ("Do You want to delete this?")' href="admin-videos-view.php?vidID=<?php echo $row['vidID'] ?>">
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