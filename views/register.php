<?php

require_once '../database/functions.php';

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = " SELECT * FROM user WHERE username = '$username' && password = '$password' ";

    $result = mysqli_query($db, $select);

    if (mysqli_num_rows($result) > 0) {

        $error[] = 'user already exist!';

    } else {

        if ($password != $cpass) {
            $error[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO user(username, email, password) VALUES('$username','$email', '$password')";
            mysqli_query($db, $insert);
            header('location:masuk.php');
        }
    }

}
;


?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-container mt-5">
                <form action="" method="post">
                    <h3 class="text-center mb-4">Register Now</h3>
                    <?php
                    if (isset($error)) {
                        foreach ($error as $error) {
                            echo '<span class="error-msg">' . $error . '</span>';
                        }
                        ;
                    }
                    ;
                    ?>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" required placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" required
                            placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" required
                            placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="cpassword" required
                            placeholder="Confirm your password">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Register Now" class="btn btn-primary btn-block">
                    </div>
                    <p class="text-center">Already have an account? <a href="masuk.php">Login Now</a></p>
                </form>
            </div>
        </div>
    </div>
</div>