<?php include("../database/connection.php"); ?>

<!DOCTYPE html>
<html>
<head>Libraries book of Mplus Software</title>
<link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css" type="text/css"/>
</head>

<body>
    <header>
        <h3>List Book</h3>
    </header>

    <nav>
        <a href="input-book.php">new input</a>
	||
	<a href="../index.php">Back</a>
    </nav>

    <br>

    <table class="table table-striped table-dark">
    <thead>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>
            <th>Number Of Page</th>
            <th>Type Of Book</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM tb_book";
        $query = mysqli_query($db, $sql);

        while($book = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$book['id']."</td>";
            echo "<td>".$book['title']."</td>";
            echo "<td>".$book['author']."</td>";
            echo "<td>".$book['date']."</td>";
            echo "<td>".$book['page_number']."</td>";
            echo "<td>".$book['type']."</td>";

            echo "<td>";
            echo "<a href='../event/edit.php?id=".$book['id']."'>Edit</a> | ";
            echo "<a href='../event/delete.php?id=".$book['id']."'>Delete</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>
