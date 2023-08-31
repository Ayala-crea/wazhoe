<?php
require '../database/functions.php';

$id = $_GET["id"];

if( pemesanan_Hapus ($id) > 0) {
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = '../routes/pay.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = '../routes/pay.php';
    </script>
    ";
}
?>