<?php

require_once "dateTimeUpload.php";
//print_r($_POST);

if(count($_POST)>0){
	$AddDT = new TIMESTAMP;
	$output= $AddDT->checkSubmit();
	
	
}
else{
	$output="";

}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content ="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	  <title>Assignmnet 7</title>
  </head>
  <body>
	  <main class="container">
		  <h1>File Uploads</h1>
		 
		 <?php 
		 var_dump($_POST);
		
		 echo '<br>';
		 echo '<a href="display.php">Display Notes</a>';
		 echo '<br>';
		 echo $output."<br>";
		 //var_dump($_POST);
		
		 ?>
	  </main>
	
	  <div class="container">
		  <div class="row">
			  <div class="col">
			  <form action="" method="POST"enctype="multipart/form-data" >
					  <div class="form-group">
						  <label for="event date time" class="form-label">Date and Time </label>
						  <input type="datetime-local" class="form-control" id="date_time" name="date_time">
					  </div>
					  <div class="form-group">
						  <label for="textareaName" class="form-label">Note </label>
						  <textarea style="height: 350px;" class="form-control" id="notes" name="notes"></textarea>
					  </div>
					  <br>
					  <button type="submit" class="btn btn-primary"  id="submit" name="submit" style="border-radius: 10px">Add Notes</button>
				  </form>
			  </div>
		  </div>
	  </div>
  </body>
</html>
  