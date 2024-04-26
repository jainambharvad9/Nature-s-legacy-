<?php include("inc/connection.php"); ?>

<?php
include("inc/admin-add-main-nev.php");

if (!isset($_SESSION['admin'])) {
?>
    <script>
        window.location.href = "login.php";
    </script>
<?php
} ?>



<h1 class="text-center mt-5 mb-5 text-primary ">Admin Home
</h1>

<div class="container">
    <div class="col-md-12 text-light wow fadeIn" data-wow-delay="0.5s">
        <h1 class="display-6 text-dark mb-5">Recent Bookings </h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Booking Id</th>
                    <th>Booking Date</th>
                    <th>Checkin Date</th>
                    <th>Checkout Date</th>
                    <th>Mobile Number</th>
                    <th>User</th>
                    <th>Safari</th>
                    <!-- <th>Action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "Select b.*,u.*,s.* from bookings b,users u,safaris s where b.userId = u.userId and b.userId = s.safId order by bookingId desc limit 5";

                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['bookingId'] ?></td>
                        <td><?php echo $row['bookingDate'] ?> </td>
                        <td><?php echo $row['checkinDate'] ?> </td>
                        <td><?php echo $row['checkoutDate'] ?> </td>
                        <td><?php echo $row['mobileNumber'] ?> </td>
                        <td><?php echo $row['userName'] ?> </td>
                        <td><?php echo $row['safName'] ?> </td>
                        <!-- <td><button type="button" class="btn btn-primary" value="Edit">Edit</button>
                            <a onclick='return confirm ("Do You want to delete this?")' href="admin-bookings-view.php?bookingId=<?php echo $row['bookingId'] ?>"> <button type="button" class="btn btn-danger" value="Delete">Delete</button></a>
                        </td> -->
                    </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
</div>



<?php include("inc/footer.php"); ?>