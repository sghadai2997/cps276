<?php 
require_once'crud.php';

Class Upload {
	public function AddFile(){
	
	//$fileType = $_FILES["FileName"]["type"];
	$fileName = $_FILES["FileName"]["name"];
	$NewName_entered = $_POST['NewName_entered'];
	$allowTypes = array('pdf');
	
	$targetFilePath = "./Upload/" . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);	
	// the physical file on a temporary uploads directory on the server
    $file = $_FILES['FileName']['tmp_name'];

	if(!empty($fileName)){

	if(($_FILES["FileName"]["size"]) > 100000){
		 return "This file is too big.";
	}
	else if(!in_array($fileType, $allowTypes)){
		 return "File type is not okay. It must be a pdf file.";
	}else if(in_array($fileType, $allowTypes)){
		if(move_uploaded_file($file, $targetFilePath))
		{
   //$sql = "INSERT INTO files (file_name, file_path) VALUES (?,?)";
				$pdo = new PdoMethods();

			/* HERE I CREATE THE SQL STATEMENT and I AM BINDING THE PARAMETERS */
			$sql = "INSERT INTO files (file_name, file_path) VALUES (:fname, :fpath)";
	   
		/* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
		$bindings = [
				[':fname',$NewName_entered,'str'],
				[':fpath',"Upload/".$fileName,'str'],
			];
	 
			/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
			$insert = $pdo->otherBinded($sql, $bindings);

			}
			if($insert){
		
				 return "The file ".$NewName_entered. " has been uploaded successfully.";
			}
			else{
		
				 return "There was a problem uploading your file. Please try again.";}
			}
			else{
	
				 return "the file is not pdf, please upload only pdf files.";
			}
		}
	}
}

?>
	
