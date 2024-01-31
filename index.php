<?php include 'header.php' ?>
    <mani>
        <div id="home">
            <img src="assets/images/hero.gif" alt="img">
        </div>

        <div id="aboutus" class="my-15">
            <div class="container flex gap-10 ">
            <div class="left">
            <video src="assets/images/election-62-212635.mp4" autoplay loop muted></video>
            </div>
            <div class="right">
                <h2>About us</h2>
                <p>     
The voting system is a comprehensive and user-friendly platform designed to facilitate democratic processes with distinct functionalities for administrators, voters, and visitors. Admins have the authority to log in, manage candidate information (each identified by a unique CNIC), and perform operations such as adding, deleting, and updating candidate data. Admins can also update their own profiles, monitor the total number of votes cast, and log out securely. Voters, after registering through a dedicated form, can log in to the system and cast their vote exactly once. The system ensures transparency by displaying a list of candidates along with the respective vote counts. Visitors, categorized as guest users, can view real-time updates on the leading candidate and overall voting trends, providing a transparent and accessible snapshot of the ongoing electoral process.
                </p>
                
            </div>
            </div>
        </div>
    </main>

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
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <label for="" class="fb">Password</label>
            <div class="form-group">
                <img class="icon" src="assets/images/pwicon.png" alt="">
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <label for="" class="fb">Login As</label>
            <div class="form-group">
                <img class="icon" src="assets/images/roleicon.png" alt="">
                <select name="role" id="" class="select-tag">
                    <option value="voter">Voter</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <input type="submit" name="login" class="form-btn" value="Logoin">
            <!-- <a href="login.php" class="form">Login</a> -->
        </form>
    </div>
   
    <div style="height: 100vh;"></div>
<?php include 'footer.php'; 











?>