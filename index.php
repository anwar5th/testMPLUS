<html>

	<head>
		<title>Libraries book of mplus software</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  		<script src="plugins/javascript/jquery.min.js"></script>
  		<script src="plugins/javascript/popper.min.js"></script>
  		<script src="plugins/javascript/bootstrap.min.js"></script
	</head>

	<body>
		<div class="jumbotron text-center">
			<h1>MPLUS SOFTWARE</h1>
			<p>Libraries Book<p>
		</div>

		<nav>
			<ul>
				<li><a href="module/input-book.php">INPUT</a></li>
				<li><a href="module/show-book.php">LIST BOOK</a></li>
			</ul>

			<?php if(isset($_GET['status'])): ?>
    			<p>
        		<?php
            		if($_GET['status'] == 'sukses'){
                		echo "more input?";
            		} else {
                	echo " ";
            		}
        		?>
    			</p>
			<?php endif; ?>

		</nav>
	<footer>&copy; Copyright 2018 Syaiful Anwar</footer>
	</body>
</html>