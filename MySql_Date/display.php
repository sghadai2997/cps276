<?php
//require_once'crud.php';
require_once'Db_conn.php';


?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>List of Files</title>
</head>
<body>
	<main class="container">
		<h2>Display Notes</h2>
		
		
	<?php
		$DateTime="AddNotes.php";
		//this link will take us back to fileupload page on web browser or index.php
		echo "<a href=$DateTime>Add Notes </a><br>";
		?>
	
	</main>
<div class="container">
		  <div class="row">
			  <div class="col">
				  <form action ="display.php" method="POST">
					  <div class="form-group">
						  <label for="begDate" class="form-label">Beginning Date:</label>
						  <input type="date" class="form-control" id="begDate" name="begDate">
					  </div>
					  <div class="form-group">
						  <label for="endDate" class="form-label">Ending Date:</label>
						  <input type="date" class="form-control" id="endDate" name="endDate">
						</div>
						<input class="btn btn-primary" type="submit" name="Get Notes" value="Get Notes">
				  </form>
			  </div>
		  </div>
	  </div>
	  <table>
			
	  <table border="1">
		<thead>
			<th>Date time</th>
			<th>Notes</th>
		</thead>
		<tbody>

<?php

require_once'crud.php';
if(count($_POST)>0){
	
		$displayList= new Crud;
		$output=$displayList->getDateTime();
		print_r($_POST);
		
	
			
			}
			else {
				echo "no notes found.";
			}
		?>
		</tbody>
	</table>
			


  </body>
</html>
  

