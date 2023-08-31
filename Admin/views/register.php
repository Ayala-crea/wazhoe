<?php

require_once '../../database/functions.php';

if (isset($_POST['submit'])) {

    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $no_telp = mysqli_real_escape_string($db, $_POST['no_telp']); // Menggunakan 'no_telp' yang benar
    $password = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = " SELECT * FROM admin WHERE nama = '$nama' && password = '$password' ";

    $result = mysqli_query($db, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'admin already exist!';
    } else {
        if ($password != $cpass) {
            $error[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO admin(nama, email, no_telp, password) VALUES('$nama','$email', '$no_telp', '$password')";
            mysqli_query($db, $insert);
            header('location: masuk.php');
        }
    }
}

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
                        <input type="text" class="form-control" name="nama" required
                            placeholder="Enter your nama">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" required placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="integer" class="form-control" name="no_telp" required placeholder="Enter your no telpon/Whatsapp">
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