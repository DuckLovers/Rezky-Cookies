<?php
    include "./configure_database.php";

    if (isset($_POST['submit'])) {
        $email = $_POST['Email'];
        $password = $_POST['Password'];

        $sql = "INSERT INTO user (email, password) VALUES ('$email', '$password')";

        if (mysqli_query($db, $sql)) {
            echo '<script type="text/javascript">',
                    'alert("Data Berhasil Ditambahkan");',
                    'window.location.href = "../html/index.html";',
                 '</script>';
        } else {
            echo '<script type="text/javascript">',
                    'alert("Data Gagal Ditambahkan: ' . mysqli_error($db) . '");',
                    'window.location.href = "../html/index.html";',
                 '</script>';
        }
        mysqli_close($db);
        exit();
    }
?>