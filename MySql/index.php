<?php
	require_once "FileUploadProc.php";

if(isset($_POST['submit'])){
	$Addname = new Upload;
	$names=$_POST["NewName_entered"];
	if($names!=NULL)
	$output= $Addname->AddFile();
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
		 
		 echo $output."<br>";
		 echo '<a href="List.php">View Uploads</a>';
		 echo '<br>';
		?>
	  </main>
	  <div class="container">
		  <div class="row">
			  <div class="col">
				  <form action="#" method="POST"enctype="multipart/form-data" >
				  <div class="form-group">
					  <label for="fileName" class="form-label">File Name</label>
					  <input type="text" class="form-control" name="NewName_entered" id="fileName">
					</div>
	
					<div class="form-group">
						<label for="File" class="form-label"><br></label>
						<input type="file"class="form-control" name="FileName" id="File" multiple/>
					</div>
					<input class="btn btn-primary" type="submit" name="submit" id="submit" value="Upload File">
				 </form>
			  </div>
		  </div>
	  </div>
  </body>
</html>
