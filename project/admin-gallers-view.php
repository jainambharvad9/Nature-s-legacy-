<?php include("inc/connection.php"); ?>
<?php include("inc/admin-add-main-nev.php");

if (isset($_GET['galId'])) {
    $galId = $_GET['galId'];
    $qdelete = "delete from gallers where galId=$galId";
    $result = mysqli_query($con, $qdelete);
}


if (!isset($_SESSION['admin'])) {
    ?>
    <script>
         window.location.href="login.php";  
    </script>
    <?php
} ?>


<h1 class="text-center mt-5 mb-5 text-primary ">Gallery View</h1>

<div class="container">
    <div class="col-md-12 text-light wow fadeIn" data-wow-delay="0.5s">
        <h1 class="display-6 text-white mb-5">Contact Info</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Gallery Id</th>
                    <th>Safari Name</th>
                    <th>Gallery URl</th>
                    <th>Gallery Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // $query = "Select b.*,u.* from bookings b,users u where b.userId = u.userId";
                $query = "Select g.*,s.* from gallers g,safaris s where g.safId = s.safId ";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['galId'] ?></td>
                        <td><?php echo $row['safName'] ?> </td>
                        <td><img onerror='this.src="img/logo/logo1.png"' src="<?php echo "img/" . $row['galURl']; ?>" height="80px" width="100px" /> </td>
                        <td><?php echo $row['gelTitle'] ?> </td>
                        <td>
                            <a href="admin-gallers-edit.php?galId=<?php echo $row['galId'] ?>">
                                <button type="button" class="btn btn-primary" value="Edit">Edit</button>
                            </a>
                            <a onclick='return confirm ("Do You want to delete this?")' href="admin-gallers-view.php?galId=<?php echo $row['galId'] ?>">
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

<?php include("inc/footer.php") ?>