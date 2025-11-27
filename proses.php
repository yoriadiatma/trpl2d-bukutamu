<?php
// include , require
require 'koneksi.php';

// insert
$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];

$query = "INSERT INTO tamu(nama, email, komentar) 
            VALUES('$nama', '$email', '$komentar')";

$sql = $koneksi->query($query); // eksekusi query

if ($sql) {
    echo "Berhasil menyimpan data";
} else {
    echo "Gagal menyimpan data!";
}

// update


// delete
