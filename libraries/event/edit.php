<?php

include("../database/connection.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: ../module/show-book.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tb_book WHERE id=$id";
$query = mysqli_query($db, $sql);
$book = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("can't not find...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Libraries Book</title>
</head>

<body>
    <header>
        <h3>Edit data Book</h3>
    </header>

    <form action="proces-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $book['id'] ?>" >

        <p>
            <label for="title">TITLE: </label>
            <input type="text" name="title" value="<?php echo $book['title'] ?>" >
        </p>
        <p>
            <label for="author">AUTHOR: </label>
            <input type="text" name="author" value="<?php echo $book['author'] ?>" >
        </p>
        <p>
            <label for="date">DATE: </label>
            <input type="date" name="date" value="<?php echo $book['date'] ?>" >
        </p>
	
        <p>
            <label for="page">PAGE: </label>
            <input type="text" name="page_number" value="<?php echo $book['page_number'] ?>" >
        </p>
        <p>
            <label for="type">TYPE: </label>
            <?php $type = $book['type']; ?>
            <select name="type">
                <option <?php echo ($type == 'NOVEL') ? "selected": "" ?>>NOVEL</option>
                <option <?php echo ($type == 'LATER') ? "selected": "" ?>>LATER</option>
                <option <?php echo ($type == 'NEWSPAPER') ? "selected": "" ?>>NEWSPAPER</option>
                <option <?php echo ($type == 'DOCUMENTATION') ? "selected": "" ?>>DOCUMENTATION</option>
            </select>
        </p>
        <p>
            <input type="submit" value="submit" name="submit">
	    ||
	    <a href="../module/show-book.php">Back</a>
        </p>

        </fieldset>


    </form>

    </body>
</html>
