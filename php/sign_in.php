<?php
include "./configure_database.php";

if (isset($_POST['submit'])) {
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Cek apakah email ada dalam database
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($db, $sql);

    if ($result) {
        $user = mysqli_fetch_assoc($result);
        // Verifikasi password jika email ditemukan
        if ($user) {
            if ($password === $user['password']) {
                // Sukses login
                echo '<script>',
                        'alert("Anda berhasil login.");',
                        'window.location.href = "../html/index.html";',
                        '</script>';
                    } else {
                        // Gagal login karena password salah
                        echo '<script>',
                        'alert("Password yang dimasukkan salah.");',
                        'window.location.href = "../html/index.html";',
                        '</script>';
                    }
                } else {
                    // Gagal login karena email tidak ditemukan
                    echo '<script>',
                            'alert("Email tidak ditemukan.");',
                            'window.location.href = "../html/index.html";',
                         '</script>';
            }
    } else {
        // Kesalahan dalam eksekusi kueri
        echo '<script>',
                'alert("Kesalahan dalam eksekusi kueri: ' . mysqli_error($db) . '");',
             '</script>';
    }
    mysqli_close($db);
}
?>
