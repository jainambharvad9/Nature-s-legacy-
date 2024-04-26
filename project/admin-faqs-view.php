<?php include("inc/connection.php"); ?>
<?php include("inc/admin-add-main-nev.php");
if (isset($_GET['faqId'])) {
    $faqId = $_GET['faqId'];
    $qdelete = "delete from faqs where faqId=$faqId";
    $result = mysqli_query($con, $qdelete);
}

if (!isset($_SESSION['admin'])) {
    ?>
    <script>
         window.location.href="login.php";  
    </script>
    <?php
} ?>


<h1 class="text-center mt-5 mb-5 text-primary ">Faq View
</h1>

<div class="container">
    <div class="col-md-12 text-light wow fadeIn" data-wow-delay="0.5s">
        <table class="table">
            <thead>
                <tr>
                    <th>Faq Id</th>
                    <th>Faq Questions</th>
                    <th>Faq Answer</th>
                    <th>Faq Note</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "Select * from faqs";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row['faqId'] ?></td>
                    <td><?php echo $row['faqQuestions'] ?> </td>
                    <td><?php echo $row['faqAns'] ?> </td>
                    <td><?php echo $row['faqNote'] ?> </td>
                    <td>
                        <a href="admin-faqs-edit.php?faqId=<?php echo $row['faqId'] ?>">
                            <button type="button" class="btn btn-primary" value="Edit">Edit</button>
                        </a>
                        <a onclick='return confirm ("Do You want to delete this?")'
                            href="admin-faqs-view.php?faqId=<?php echo $row['faqId'] ?>">
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

<div></div>
<?php include("inc/footer.php"); ?>