<?php include("inc/connection.php");


if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];
    $qdelete = "delete from users where userId=$userId";
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
}?>

<br>
<h1 class="text-center mt-5 mb-5 text-primary ">User View</h1>


<div class="container">
    <div class="col-md-12 text-light wow fadeIn" data-wow-delay="0.5s">
        <h1 class="display-6 text-white mb-5">Contact Info</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>User BrithDate </th>
                    <th>User Gender</th>
                    <th>User Password</th>
                    <th>User Email</th>
                    <th>Mobile Number</th>
                    <th>User Address</th>
                    <!-- <th>Action</th> -->
                    </tr>
            </thead>
            <tbody>
                <?php
                $query = "Select * from users";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['userId'] ?></td>
                        <td><?php echo $row['userName'] ?> </td>
                        <td><?php echo $row['userBtd'] ?> </td>
                        <td><?php echo $row['userGen'] ?> </td>
                        <td><?php echo $row['userPassword'] ?> </td>
                        <td><?php echo $row['userEmail'] ?> </td>
                        <td><?php echo $row['mobileNumber'] ?> </td>
                        <td><?php echo $row['userAddress'] ?> </td>
                        <!-- <td><button type="button" class="btn btn-primary" value="Edit">Edit</button>
                            <a onclick='return confirm ("Do You want to delete this?")' href="admin-users-view.php?userId=<?php echo $row['userId'] ?>"> <button type="button" class="btn btn-danger" value="Delete">Delete</button></a>
                        </td> -->
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include("inc/footer.php") ?>