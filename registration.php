<?php include 'header.php';
session_start();
?>

<div class="container">
    <div class="registration-form">
        <form action="" method="post" id="reg-from" enctype="multipart/form-data">
            <div class="">
                <h3 class="form-title">Registration Form</h3>
                <img id="crosse-icon" src="assets/images/crossicon.png" alt="crosse">
            </div>

            <!-- session message's -->
            <?php 
                if(isset($_SESSION['sms'])){
                ?>
                    <div class="alert <?php echo $_SESSION['class']; ?> flex" id="alert-session">
                        <?php echo $_SESSION['sms']; ?>
                        <img src="assets/images/menu-close-icon.png" alt="" id="hide-session" onclick="hidewraper();">
                    </div>
                <?php
                }
            ?>

            <!-- session message's end-->
            
            <!-- name -->
            <label for="" class="fb">Name</label>
            <div class="form-group">
                <img class="icon" src="assets/images/usericon.png" alt="img">
                <input type="text" name="rname" class="form-control" placeholder="Enter Name" required>
            </div>
            <!-- email -->
            <label for="" class="fb">Email</label>
            <div class="form-group">
                <img class="icon" src="assets/images/email.png" alt="img">
                <input type="email" name="remail" class="form-control" placeholder="Enter email" required>
            </div>
            <!-- cnic -->
            <label for="" class="fb">CNIC</label>
            <div class="form-group">
                <img class="icon" src="assets/images/cardicon.png" alt="img">
                <input type="text" name="rcnic" class="form-control"
                    pattern="^[0-9]{5}-[0-9]{7}-[0-9]{1}$" title="Type CNIC like 34504-1234567-1" required
                    placeholder="34501-1234567-1">
            </div>
            <!-- image -->
            <label for="" class="fb">Select Image</label>
            <div class="form-group">
                <img class="icon" src="assets/images/imageicon.png" alt="img">
                <input type="file" name="rfile" required>
            </div>
            <!-- password -->
            <label for="" class="fb">Password</label>
            <div class="form-group">
                <img class="icon" src="assets/images/pwicon.png" alt="img">
                <input type="password" name="rpw" class="form-control" placeholder="Password" required>
            </div>

            <input type="submit" name="registration" class="form-btn" value="Register">
        </form>

        <?php
        if (isset($_POST['registration'])) {
            // CNIC verification
            $cnic = mysqli_real_escape_string($con, $_POST['rcnic']);
            $sql_cnic = "SELECT * FROM `voter` WHERE CNIC='$cnic'";
            $query_cnic = mysqli_query($con, $sql_cnic);
            $cnic_row = mysqli_num_rows($query_cnic);

            if (!$cnic_row) {
                $name = mysqli_real_escape_string($con, $_POST['rname']);
                $email = mysqli_real_escape_string($con, $_POST['remail']);
                $pw = password_hash(mysqli_real_escape_string($con, $_POST['rpw']), PASSWORD_DEFAULT);

                $image = $_FILES['rfile'];
                $imagefilename = $image['name'];
                $imagetmp_name = $image['tmp_name'];

                $imagefile_separate = explode('.', $imagefilename);
                $file_extension = strtolower(end($imagefile_separate));
                $extensions = array('jpeg', 'jpg', 'png');

                if (in_array($file_extension, $extensions)) {
                    $upload_image = 'uploadsR/' . $imagefilename;
                    move_uploaded_file($imagetmp_name, $upload_image);

                    $sql_register = "INSERT INTO `voter`(`CNIC`, `Name`, `email`, `img`, `Password`) 
                    VALUES ('$cnic','$name','$email','$upload_image', '$pw')";
                    $query_register = mysqli_query($con, $sql_register);

                    if ($query_register) {
                        // echo "Registration successful.";
                        $message = "Registration done successful.";
                        $_SESSION['sms'] = $message;
                        $_SESSION['class'] = "alert-success";
                        header('location: registration.php');
                    } else {
                        // echo "Registration failed.";
                        $message = "Registration failed.";
                        $_SESSION['sms'] = $message;
                        $_SESSION['class'] = "alert-danger";
                    }
                } else {
                    // echo "Invalid file format. Please upload JPEG, JPG, or PNG.";
                    $message = "Invalid file format. Please upload JPEG, JPG, or PNG.";
                    $_SESSION['sms'] = $message;
                    $_SESSION['class'] = "alert-danger";
                }
            } else {
                // echo "CNIC already exists.";
                $message = "CNIC already exists.";
                $_SESSION['sms'] = $message;
                $_SESSION['class'] = "alert-danger";
            }
        }
        ?>
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

<?php include 'footer.php'; 




?>