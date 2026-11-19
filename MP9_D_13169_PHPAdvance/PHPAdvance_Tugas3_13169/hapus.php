<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    if (!ctype_digit($id)) {
        echo '<p style="color:red;">!! ID tidak valid. !!</p>';
    } else {
        $stmt = mysqli_prepare($conn, 'DELETE FROM film WHERE id = ?');
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);

        if ($affected_rows === 1) {
            echo '<p>Data berhasil dihapus (' . $affected_rows . ' baris).</p>';
        } else {
            echo '<p>Data tidak ditemukan.</p>';
        }
    }
    echo '<a href="index.php">Kembali</a>';
}
?>
