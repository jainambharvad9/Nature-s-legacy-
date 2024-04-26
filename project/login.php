<?php
include("inc/main-nev.php");

include("inc/connection.php");
?>




<div class="container">
    <form class="" method="post">
        <h3 class="text-center  mt-3 mb-3 text-primary " style="font-size: 40px;">Login</h3>
        <div class="row-4 align-content-center">
            <div class="col-md-6 offset-md-3">
                <div class="form-floating">
                    <input type="email" required class="form-control bg-light border-5" name="Email" id="email" placeholder=" Enter E-mail Id ">
                    <label for="email">E-mail</label>

                </div>
                <small style="color:red;" id="emailError"></small>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6 offset-md-3">
                <div class="form-floating">
                    <input type="password" required class="form-control bg-light border-5" id="Password" name="Password" placeholder="Enter Password">
                    <label for="Password">Password</label>
                </div>
                <small style="color:red;" id="passwordError"></small><br>

            </div>
        </div>
        <br>
        <div class="col-4 offset-md-4 ">
            <!-- <button class="btn btn-primary w-100 py-3" name="Login" type=""></button> -->
            <input class="btn btn-primary border-5 w-100 py-3" type="submit" value="Login" name="Login">
        </div>
    </form>
</div>

<?php

if (isset($_POST['Login'])) {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    //user
    $fetchuser = "select * from users where userEmail = '$Email'";
    $user_result = mysqli_query($con, $fetchuser);
    $userEmailCount = mysqli_num_rows($user_result);
    //admin
    $fetchadmin = "select * from admins where adminemail = '$Email'";
    $admin_result = mysqli_query($con, $fetchadmin);
    $adminemailCount = mysqli_num_rows($admin_result);
?>
    <script>
        let email = document.getElementById('emailError');
        let password = document.getElementById('passwordError');
    </script>
    <?php
    if ($userEmailCount > 0) {
        $user_row = mysqli_fetch_array($user_result);
        $upass = $user_row['userPassword'];
        $uname = $user_row['userName'];
        if ($upass == $Password) {
            $_SESSION['users'] = $user_row;
    ?>
            <script>
                swal({
                    title: "Login Successfully",
                    text: "welcome <?php echo $uname; ?> ",
                    icon: "success",
                    button: false,
                });
                setTimeout(st, 2000)

                function st() {
                    window.location.href = "index.php"
                }
            </script>
        <?php
        } else {

        ?>
            <script>
                password.innerText = "incorect password";
            </script>
        <?php
        }
    } else if ($adminemailCount > 0) {

        $admin_row = mysqli_fetch_array($admin_result);
        $apass = $admin_row['adminPassword'];
        $aname = $admin_row['adminName'];

        if ($apass == $Password) {
            $_SESSION['admin'] = $admin_row;

        ?>
            <script>
                swal({
                    title: "Admin Login Successfully",
                    text: "welcome <?php echo $aname; ?> ",
                    icon: "success",
                    button: false,
                });
                setTimeout(st, 2000)

                function st() {
                    window.location.href = "admin-home-add.php";
                }
            </script>
        <?php

        } else {
        ?>
            <script>
                password.innerText = "incorect password";
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            email.innerText = "email not found";
        </script>
<?php
    }
}
include("inc/footer.php");
?>