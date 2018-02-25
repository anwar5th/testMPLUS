<?php

include("../database/connection.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari buku
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $date = $_POST['date'];
    $page_number = $_POST['page_number'];
    $type = $_POST['type'];

    // buat query
    $sql = "INSERT INTO tb_book (title, author, date, page_number, type) VALUE ('$title', '$author', '$date', '$page_number', '$type')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../module/show-book.php?status=succes');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../index.php?status=failed');
    }


} else {
    die("can't not acces...");
}

?>
