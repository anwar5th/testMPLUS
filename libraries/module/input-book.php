<!DOCTYPE html>
<html>
<head>
    <title>INPUT OF BOOK</title>
	<link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.css" type="text/css"/>
	<link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css" type="text/css"/>
    	<link rel="stylesheet" href="../plugins/javascript/jquery-ui.css" type="text/css"/>
	<link rel="stylesheet" href="../style/input-view.css" type="text/css"/>
	<script src="../plugins/javascript/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../plugins/javascript/jquery-ui.js" type="text/javascript"></script>
</head>

<body>
 
    <div class="head">
    <div class="body">INPUT BOOK IN HERE</div>

    <div class="panel-body">
    <form action="../event/proces-input.php" method="POST" class="form-inline">

        <div class="form-group">
      	<label for="title">TITLE:</label>
            <input type="text" class="form-control" name="title" />
        </div>
        <div class="form-group">
      	<label for="author">AUTHOR:</label>
            <input type="text" class="form-control" name="author" />
        </div>
        <div class="form-group">
      	<label for="date">DATE:</label>
            	<input type="date" class="form-control" name="date" id="date"/>
        </div>
        <div class="form-group">
      	<label for="page">PAGE:</label>
            <input type="text" class="form-control" name="page_number" />
        </div>
        <div class="form-group">
      	<label for="type">TYPE:</label>
            <select name="type">
                <option>NOVEL</option>
                <option>LATER</option>
                <option>NEWSPAPER</option>
                <option>DOCUMENTATION</option>
            </select>
        </div>
	</tr>
        <p>
            <input type="submit" class="btn btn-default" value="submit" name="submit" />
	    ||
	    <a href="../index.php">Back</a>
        </p>



    </form>
    </div>
    </div>
    </body>
</html>
