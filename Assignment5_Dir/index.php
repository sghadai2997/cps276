<?php
$output="";
if(count($_POST) > 0){
	require_once "Class_Directory.php";
	$AddDir_Files = new Directories();
	$output = $AddDir_Files->getDir();
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
		  <h1>Files and Directory Assignment </h1>
		  <p>Enter a folder name and the contents of a file.Folder names should contain alpha numeric characters only.</p>
		  <?php echo $output?>
	  </main>
	 <div class="container">
		 <form method="POST">
			  <div class="form-group">
				   <label for="EnterName" class="form-label">Folder Name: </label>
				   <input type="text" class="form-control" name="name" id="EnterName">
				</div>
				<div class="form-group">
					<label for="textareaName" class="form-label">File Content: </label>
					<textarea style="height: 300px;" class="form-control" id="namelist" name="namelist"></textarea>
				</div>
				 <div class="form-group">
					 <input class="btn btn-primary" type="submit" name="submit" value="submit">
					</div>
				</form>  
			</div>
 </body>
</html>
