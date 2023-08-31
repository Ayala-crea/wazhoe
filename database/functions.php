<?php
$db = mysqli_connect("localhost", "root", "", "wazhoe");

// Check if the database connection is successful
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}

function query($query, ...$params)
{
    global $db;

    // Use prepared statements for security
    $stmt = mysqli_prepare($db, $query);

    if ($stmt === false) {
        die("Query preparation failed: " . mysqli_error($db));
    }

    // Bind parameters if provided
    if (!empty($params)) {
        mysqli_stmt_bind_param($stmt, str_repeat('s', count($params)), ...$params);
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($result === false) {
        die("Query execution failed: " . mysqli_error($db));
    }

    $rows = [];

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $rows[] = $row;
    }

    mysqli_stmt_close($stmt);

    return $rows;
}

function pemesanan($data)
{
    global $db;
    $id =
        $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $brand = htmlspecialchars($data["brand"]);
    $jumlah_sepatu = (int) $data["quantity"];
    $alamat = htmlspecialchars($data["Alamat"]);
    $keterangan = htmlspecialchars($data["keterangan"]);


    $query = "INSERT INTO pemesanan (nama, email, kategori, brand, quantity, Alamat, keterangan)
    VALUES ('$nama', '$email', '$kategori', '$brand', '$jumlah_sepatu', '$alamat', '$keterangan')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
// File: functions.php

function calculateTotalPrice($product, $quantity)
{
    global $db;

    // Gantikan "nama_tabel_produk" dengan nama tabel yang menyimpan informasi produk dan harga pada database Anda
    $query = "SELECT harga FROM detail_kategori WHERE id = ?";
    $stmt = mysqli_prepare($db, $query);

    if ($stmt === false) {
        die("Query preparation failed: " . mysqli_error($db));
    }

    mysqli_stmt_bind_param($stmt, "i", $product);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $harga);

    if (mysqli_stmt_fetch($stmt)) {
        mysqli_stmt_close($stmt);
        return $harga * $quantity;
    } else {
        mysqli_stmt_close($stmt);
        return 0;
    }
}

function login($username, $password)
{
    global $db;

    $username = mysqli_real_escape_string($db, $username);
    $password = md5($password);

    $select = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($db, $select);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['username'] = $username;
        return true;
    } else {
        return false;
    }
}

function tambahGambar($data)
{
    global $db;

    $pesan = 'SELECT * INTO pemesanan.nama';

    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data[$pesan == 'nama']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO bukti_pembayaran 
                VALUES 
                ('', '$nama', '$gambar')";
    mysqli_query($db, $query);
}

function upload()
{}
function pemesanan_Hapus($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM pemesanan WHERE id = $id");
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
    
        // Hapus data pemesanan berdasarkan ID
        $delete_query = query("DELETE FROM pemesanan WHERE id = '$id'");
    
        if ($delete_query) {
            // Redirect kembali ke halaman shopping cart
            header("Location: shopping_cart.php");
            exit;
        } else {
            echo "Gagal menghapus data pemesanan.";
        }
    } else {
        echo "ID pemesanan tidak valid.";
    }

    return mysqli_affected_rows($db);
}

?>