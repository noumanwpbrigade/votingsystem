<?php include 'header.php' ?>

<div class="container admin-home-flex">
    <div class="right-sidebar">
        <?php include 'sidebar.php'; ?>
    </div>

    <div class="main-content">
        <!-- Add new candidate -->
        <h3 class="color-heading" id="addnewbtn">Add New</h3>
        <div class="candidate-form" id="candidate-form">
            <form action="" method="post">
                
                <h3 class="form-title " id="addnew">Add New Candidate</h3>
                <img id="crosse-btn" class="crosse-icon" onclick="closecandidateform();"  src="../assets/images/crossicon.png" alt="crosse">
                
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
                
                <input type="submit" name="login" class="form-btn" value="Add New">
            </form>
        </div>
        <?php ?>

        <hr>
        <!-- Candidate list -->
        <h3 class="color-heading">List of All Candidate</h3>

        <table>
            <thead>
                <th>Sr</th>
                <th>ID</th>
                <th>Name</th>
                <th>CNIC</th>
                <th>Image</th>
                <th>Votes Received</th>
                <th>Operations</th>
            </thead>
            <tbody>
            <?php
                $sql_candidate = "SELECT * FROM `candidate`";
                $run_candidate = mysqli_query($con, $sql_candidate);
                $rows_candidate = mysqli_num_rows($run_candidate);

                if($rows_candidate) {
                    $counter = 1;
                    while($data = mysqli_fetch_assoc($run_candidate)){
                        echo "<tr>
                                <td>" . $counter++ . "</td>
                                <td>" . $data['candidateID'] . "</td>
                                <td>" . $data['name'] . "</td>
                                <td>" . $data['CNIC'] . "</td>
                                <td>" . $data['image'] . "</td>
                                <td>" . $data['votesReceived'] . "</td>
                                <td><a href=\"\">Edit</a>
                                <a href=\"\">Delete</a></td>
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                            <td rowspan=\"7\">No Data Found</td>
                        </tr>";
                }
            ?>

            
                
            </tbody>
        </table>
        
    </div>
</div>







<?php include 'footer.php' ?>