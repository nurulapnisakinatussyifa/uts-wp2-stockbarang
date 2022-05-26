<?php
$conn_str = "host=john.db.elephantsql.com " .
    "port=5432 " .
    "user=iaijbunw " .
    "dbname=iaijbunw " .
    "password=11ETSyt41QMmqzYr4R9y1eF3TdRow3sw";
$conn = pg_connect($conn_str);

// if($conn) {
//     echo "<h3>Koneksi Berhasil</h3>";
// } else {
//     echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
// }
?>