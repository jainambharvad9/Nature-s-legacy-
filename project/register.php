<?php include("inc/main-nev.php"); ?>
<?php include("inc/connection.php");

?>

<?php

if (isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $userBtd = $_POST['userBtd'];
    $userEmail = $_POST['userEmail'];
    $userGender = $_POST["useGen"];
    $userPassword = $_POST['userPassword'];
    $userAddress = $_POST['userAddress'];
    $userMobile = $_POST["mobileNo"];
    $cmd = "select * from users where userEmail = '$userEmail'";
    $result = mysqli_query($con, $cmd);
    if (mysqli_num_rows($result) == 0) {
        $query = "insert into users(userName,userBtd,userEmail,userPassword,userAddress,userGen,mobileNumber) values('$userName','$userBtd','$userEmail','$userPassword','$userAddress','$userGender','$userMobile')";
        $result = mysqli_query($con, $query);
        if ($result) {
?>
<script>
swal({
    title: "Registration Successfully",
    text: "Thank You For Registering",
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
            echo mysqli_error($con);
        }
    } else {
        ?>
<script>
swal({
    title: "Your Email Already Is Registered",
    text: "Try Another Email Address",
    icon: "error",
    button: false,
});
</script>
<?php
    }
}
?>

<!-- Page Header Start -->
<div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown">Register</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="about.php">About Us</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Register</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->



<div class="container ">
    <form method="post" action="#">
        <p class="text-center text-primary" style="font-size: 40px;">Register</p>
        <div class="row ">
            <div class="col-md-6 offset-md-3">
                <div class="form-floating">
                    <input type="text" required class="form-control bg-light border-5" id="userName"
                        value="<?php echo isset($_POST['userName']) ? $_POST['userName'] : ''; ?>" name="userName"
                        placeholder="userName">
                    <label for="userName">UserName</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-floating">
                    <input type="date" required class="form-control bg-light border-5" id="userBtd"
                        value="<?php echo isset($_POST['userName']) ? $_POST['userName'] : ''; ?>" name="userBtd"
                        placeholder="userBtd">
                    <label for="userBtd">Date of Birth</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row ">
            <div class="col-md-6 offset-md-3">
                <div class="form-floating">
                    <input type="number" required class="form-control bg-light border-5" id="mibileNumber" name="mobileNo"
                        placeholder="mibileNumber">
                    <label for="mibileNumber">Mobile Number</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-floating">
                    <input type="email" required class="form-control bg-light border-5" id="userEmail" name="userEmail"
                        placeholder="userEmail">
                    <label for="userEmail">E-mail</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row ">
            <div class="col-md-6 offset-md-3">
                <div class="form-floating">
                    <input type="password" required class="form-control bg-light border-5" id="userPassword" name="userPassword"
                        placeholder="userPassword">
                    <label for="userPassword">Password</label>
                </div>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-floating">
                    <textarea required class="form-control bg-light border-5 " style="height:100px;" cols="12" rows="9"
                        placeholder="Address" name="userAddress"
                        id="userAddress"><?php echo isset($_POST['userAddress']) ? $_POST['userAddress'] : ''; ?></textarea>
                    <label for="userAddress">Address</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row-4">
            <div class="col-md-6 offset-md-3">Select Gender
                <div class="form-check">
                    <label class="form-check-label" for="mgen">Male
                        <input class="form-check-input" type="radio" required value="Male" name="useGen" id="mgen">
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="fgen">Female
                        <input class="form-check-input" type="radio" required value="Female" name="useGen" id="fgen">
                    </label>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-3 offset-md-3">
            <!-- <button class="btn btn-primary w-100 py-3" name="Login" type=""></button> -->
            <input class="btn btn-primary border-5 w-100 py-3" type="submit" value="Login" name="submit">
        </div>
        <small style="color:red;" id="emailError"></small>
    </form>
</div>






<?php include("inc/footer.php"); ?>