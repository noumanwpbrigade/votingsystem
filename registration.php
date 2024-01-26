<?php include 'header.php' ?>

<div class="container">
<div class="registration-form ">
<form action="" method="post" id="reg-from">
            <div class="">
            <h3 class="form-title">Login Form</h3>
            <img id="crosse-icon" src="assets/images/crossicon.png" alt="crosse">
            </div>
            <p class="description">Login here Using Email & Password</p>
            <!-- name -->
            <label for="" class="fb">Name</label>
            <div class="form-group">
                <img class="icon" src="assets/images/usericon.png" alt="">
                <input type="text" class="form-control" placeholder="Enter Name">
            </div>
            <!-- email -->
            <label for="" class="fb">Email</label>
            <div class="form-group">
                <img class="icon" src="assets/images/email.png" alt="">
                <input type="text" class="form-control" placeholder="Enter eamil">
            </div>
            <!-- cnic -->
            <label for="" class="fb">CNIC</label>
            <div class="form-group">
                <img class="icon" src="assets/images/cardicon.png" alt="">
                <input type="number" class="form-control" placeholder="Enter CNIC">
            </div>
            <!-- image -->
            <label for="" class="fb">Select Image</label>
            <div class="form-group">
                <img class="icon" src="assets/images/imageicon.png" alt="">
                <input type="file" >
            </div>
            <!-- password -->
            <label for="" class="fb">Password</label>
            <div class="form-group">
                <img class="icon" src="assets/images/pwicon.png" alt="">
                <input type="password" class="form-control" placeholder="Password">
            </div>

            <input type="submit" name="registerme" class="form-btn" value="Register">
            <!-- <a href="login.php" class="form">Login</a> -->
        </form>
</div>
</div>


    <div class="logoinform" id="logoinform">
    <form action="login.php" method="post" id="login-from">
            <div class="">
            <h3 class="form-title">Login Form</h3>
            <img id="crosse-icon" class="crosse-icon"  src="assets/images/crossicon.png" alt="crosse">
            </div>
            <p class="description">Login here Using Email & Password</p>
            <label for="" class="fb">Email</label>
            <div class="form-group">
                <img class="icon" src="assets/images/email.png" alt="">
                <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <label for="" class="fb">Password</label>
            <div class="form-group">
                <img class="icon" src="assets/images/pwicon.png" alt="">
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <label for="" class="fb">Login As</label>
            <div class="form-group">
                <img class="icon" src="assets/images/roleicon.png" alt="">
                <select name="" id="" class="select-tag">
                    <option value="">Voter</option>
                    <option value="">Admin</option>
                </select>
            </div>
            <input type="submit" name="login" class="form-btn" value="Logoin">
        </form>
    </div>

<?php include 'footer.php'; ?>