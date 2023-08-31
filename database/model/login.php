<?php
require_once './functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = " SELECT *  FROM user WHERE (email = '$email' OR name =  '$email') AND password = SHA1('$password')";

    $data = $mysqli->query($sql) or die($mysqli->$error);

    if ($data->num_rows != 0) {
        $row = mysqli_fetch_object($data);
        $_SESSION['id'] = $row->id;
        $_SESSION['username'] = $row->username;
        $_SESSION['email'] = $row->email;
        $_SESSION['password'] = $row->password;

    } else {
        $error = "Email atau Password salah";
    }
}
?>