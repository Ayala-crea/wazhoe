<?php
require_once '../../database/functions.php';

$data = "SELECT * FROM user";
$result = mysqli_query('$db, $data');

?>

<div class="container mt-5">
    <h2>Data Pesanan</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">username</th>
                <th scope="col">admin</th>
                <th scope="col">password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row): ?>
                <tr>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['admin'] ?></td>
                    <td><?= $row['password'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
