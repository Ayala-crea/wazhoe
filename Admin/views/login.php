<?php

require_once '../../database/functions.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = md5($_POST['password']);

    $select = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($db, $select);
    header('location:index.php');

    // if (mysqli_num_rows($result) > 0) {
    //     session_start();
    //     $_SESSION['username'] = $username;
    //     header('location: index.php');
    // } else {
    //     header('location:index.php');
    // }
}

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="login-container">

                <form action="" method="post">
                    <h3 class="text-center mt-5">login</h3>
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
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="login now" class="form-btn">
                    </div>
                    <p>don't have an account? <a href="daftar.php">register now</a></p>
                </form>

            </div>
        </div>
    </div>
</div>