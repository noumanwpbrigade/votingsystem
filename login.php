<?php 
        if(isset($_POST['login'])) {
            $role = $_POST['role'];
            if($role === "admin"){
                echo "admin here";
            }
            else {
                echo "pro user";
            }

            $email = $_POST['email'];
            
            echo "<br>";
            echo $email;
        }
    ?>