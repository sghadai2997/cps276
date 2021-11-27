<?php
require_once'PdoMethods.php';
Class TIMESTAMP{

public function checkSubmit()
{
		
	$dateT=$_POST['date_time'];
	/*$statement = $_POST['date_time'];
	//string is going to be the substring function, 0 is for start, there is 12 months in the year.
	$year = substr($statement, 0, -12);
	$month = substr($statement, 5, -9);
	$day = substr($statement, 8, -6);
	$hour = substr($statement, 11, -3);
	$minute = substr($statement, 14);
	$noteTime = gmmktime($hour, $minute, 30, $month, $day, $year);*/
	$my_date = date("Y-m-d H:i:s", strtotime($dateT));
	
		$note=$_POST['notes'];
	
		//$targetFilePath = "./UPLOAD/" ;
		//$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);	
		// the physical file on a temporary uploads directory on the server
		//$file = $_FILES['date_time']['tmp_name'];
	
		if(!empty($dateT)){
		
	
				$pdo = new PdoMethods();
	
				/* HERE I CREATE THE SQL STATEMENT and I AM BINDING THE PARAMETERS */
				$sql = "INSERT INTO dates (date_time, notes) VALUES(:DateTime, :Note)";
			/* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
			$bindings = [
					[':DateTime',$my_date,'str'],
					[':Note', $note,'str'],
					//[':submit'.$note,'str'],
				];
		 
				// I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
				$insert = $pdo->otherBinded($sql, $bindings);
	
				
				if($insert){
			
					 echo "The file ".$note. " has been uploaded successfully.";
				}
				else {
			
					 echo "There was a problem uploading your file. Please try again.";}
				}
				
				
			}
}
		
	
	?>