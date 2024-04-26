<?php include("inc/connection.php");

if (isset($_GET['docId'])) {
    $docId = $_GET['docId'];
    $qdelete = "delete from documents where docId=$docId";
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
}  ?>
<h1 class="text-center mt-5 mb-5 text-primary ">Feedback View
</h1>
<div class="container">
    <div class="col-md-12 text-light wow fadeIn" data-wow-delay="0.5s">
        <table class="table">
            <thead>
                <tr>
                    <th>Feedback Id</th>
                    <th>Feedback Name</th>
                    <th>Feedback Email </th>
                    <th>Feedback Subject</th>
                    <th>Feedback Message</th>
                    <!-- <th>Action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "Select * from feedbacks";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr> 
                        <td><?php echo $row['yId'] ?></td>
                        <td><?php echo $row['yname'] ?></td>
                        <td><?php echo $row['yemail'] ?> </td>
                        <td><?php echo $row['ysubject'] ?> </td>
                        <td><?php echo $row['ymessage'] ?> </td>
                        <td>
                            <!-- <button type="button" class="btn btn-primary" value="Edit">Edit</button> -->
                            <a onclick='return confirm ("Do You want to delete this?")' href="admin-documents-view.php?yId=<?php echo $row['yId'] ?>">
                                <button type="button" class="btn btn-danger" value="Delete">Delete </button>
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