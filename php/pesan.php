<?php
    include "./configure_database.php";

    if (isset($_POST['submit'])) {
        $nama = $_POST['Nama'];
        $email = $_POST['Email'];
        $pesan = $_POST['Pesan'];

        $sql = "INSERT INTO pesan (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

        if (mysqli_query($db, $sql)) {
            echo '<script type="text/javascript">',
                    'alert("Pesan Berhasil Dikirimkan");',
                    'window.location.href = "../html/kontak.html";',
                 '</script>';
        } else {
            echo '<script type="text/javascript">',
                    'alert("Pesan Gagal Dikirimkan: ' . mysqli_error($db) . '");',
                    'window.location.href = "../html/kontak.html";',
                 '</script>';
        }
        mysqli_close($db);
        exit();
    }
?>