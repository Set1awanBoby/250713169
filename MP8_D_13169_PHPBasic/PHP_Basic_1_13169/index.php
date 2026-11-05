<?php
    echo "<h1>Data Kontak</h1>";
    echo '<form>
        <p>Nama     : <br /><input type="text" name="nama" /></p>
        <p>Telpon   : <br /><input type="text" name="telpon" /></p>
        <p>Email    : <br /><input type="text" name="email" /></p>
        <button type="submit">Kirim</button>
    </form>';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $telpon = $_POST['telpon'];
        $email = $_POST['email'];
        echo "Terima kasih, " . htmlspecialchars($nama) . "| Informasi selanjutnya akan dikirim ke nomor telepon"
        . htmlspecialchars($telpon) . " dan email " . htmlspecialchars($email);  
    } else {
        echo "Silahkan isi formulir di atas untuk mengirimkan data kontak.";
    }
?>