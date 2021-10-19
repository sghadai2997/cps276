<?php
$output="";
if(count($_POST) > 0){
	require_once "Class.php";
	$Addname = new Namelist();
	$output = $Addname->getNames();
	
}

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content ="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	  <title>Classform</title>
  </head>
  <body>
	  <main class="container">
		  <h1>Add Names</h1>
	  </main>
	  <div class="container">
		  <div class="row">
			  <div class="col">
				  <form method="POST">
					  <input class="btn btn-primary" type="submit" name="submit" value="AddName">
					  <input class="btn btn-primary" type="submit" name="reset" value="ClearName">
					  <div class="form-group">
						  <label for="EnterName" class="form-label">Enter Names: </label>
						  <input type="text" class="form-control" name="name" id="EnterName">
					  </div>
					  <div class="form-group">
						  <label for="textareaName" class="form-label">List of Names: </label>
						  <textarea style="height: 500px;" class="form-control" id="namelist" name="namelist"><?php echo $output ?></textarea>
					  </div>
				  </form>
			  </div>
		  </div>
	  </div>
  </body>
</html>
  