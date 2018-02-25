<?php

include("../database/connection.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari show book
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $date = $_POST['date'];
    $page_number = $_POST['page_number'];
    $type = $_POST['type'];

    // buat query update
    $sql = "UPDATE tb_book SET title='$title', author='$author', date='$date', page_number='$page_number', type='$type' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman show-book.php
        header('Location: ../module/show-book.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
