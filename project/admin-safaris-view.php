<?php include("inc/connection.php");

if (isset($_GET['safId'])) {
    $safId = $_GET['safId'];
    $qdelete = "delete from safaris where safId=$safId";
    $result = mysqli_query($con, $qdelete);
}
?>

<?php include("inc/admin-add-main-nev.php");

if (!isset($_SESSION['admin'])) {
    ?>
    <script>
         window.location.href="login.php";  
    </script>
    <?php
} ?>
<br>
<h1 class="text-center mt-5 mb-5 text-primary ">Safari View</h1>


<div class="container">
    <div class="col-md-12 text-light wow fadeIn" data-wow-delay="0.5s">
        <h1 class="display-6 text-white mb-5">Contact Info</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Safari Id</th>
                    <th>Safari Name</th>
                    <th>Mobile Number</th>
                    <th>Safari Days</th>
                    <th>Safari Price</th>
                    <th>Safari Time</th>
                    <th>Category Name</th>
                    <th>Category Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "Select s.*,c.catName from safaris s,categorys c where s.catId=c.catId";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['safId'] ?></td>
                        <td><?php echo $row['safName'] ?> </td>
                        <td><?php echo $row['mobileNumber'] ?> </td>
                        <td><?php echo $row['safDay'] ?> </td>
                        <td><?php echo $row['safPrice'] ?> </td>
                        <td><?php echo $row['safTime'] ?> </td>
                        <td><?php echo $row['catName'] ?> </td>
                        <td><img onerror='this.src="img/logo/logo1.png"' src="<?php echo "catImages/" . $row['catImg'] ?>" height="100px" width="100px" /> </td>
                        <td>
                            <a href="admin-safaris-edit.php?safId=<?php echo $row['safId'] ?>">
                                <button type="button" class="btn btn-primary" value="Edit">Edit</button>
                            </a>
                            <a onclick='return confirm ("Do You want to delete this?")' href="admin-safaris-view.php?safId=<?php echo $row['safId'] ?>">
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