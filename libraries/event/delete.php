<?php

include("../database/connection.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM tb_book WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: ../module/show-book.php');
    } else {
        die("dalate fail...");
    }

} else {
    die("can't not acces...");
}

?>
