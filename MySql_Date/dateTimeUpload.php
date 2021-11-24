<?php
require_once'PdoMethods.php';
Class TIMESTAMP{

public function checkSubmit()
{
		
	$dateT=$_POST['date_time'];
	//$statement = $_POST['date_time'];
	//string is going to be the substring function, 0 is for start, there is 12 months in the year.
	//$year = substr($statement, 0, -12);
	//$month = substr($statement, 5, -9);
	//$day = substr($statement, 8, -6);
	//$hour = substr($statement, 11, -3);
	//$minute = substr($statement, 14);
	//$noteTime = gmmktime($hour, $minute, 30, $month, $day, $year);
	$my_date = date("Y-m-d H:i:s");

		//$dateT=$_POST['date_time'];
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
					[':DateTime',$my_date,'int'],
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
		
	
	
	/*public function getDateTime($begDate,$end){
		
        $pdo = new PdoMethods();
        
        $sql = "SELECT * FROM dates WHERE(date_time AS DATE) BETWEEN '$begDate' AND '$end' ORDER BY date_time;"; //files is a table name

        $record = $pdo->selectNotBinded($sql);

        // IF THERE WAS AN ERROR DISPLAY MESSAGE 
        if($record == 'error'){
            return 'There has been and error processing your request';
        }
        else {
            if(count($record) != 0){
                return $this->display($record);	
            }
            else {
                return 'no files found';
            }
        }
	}
	private function display($record){
		
	if(isset($_POST['submit'])){
	date_default_timezone_set('America/Detroit');
	$begin=$_POST['begDate'];
	$this->date($begin);
	$end=$_POST['end'];
	$this->date($end);


			$list='<tr>';
			foreach($record as $row)
			{
				if($row['date_time']>=$begin && $row['date_time']<=$end){
					$timestamp = strtotime('date_time');
		//$DateTime= date("\T\h\e jS \o\\f F, Y, \a\\t g:i A", $d );
		$DateTime=getdate($timestamp);
		$list="<tr><td>Date:$DateTime</td><td> notes:{$row['notes']}</td></tr>";
       
	}
}

$list='</tr>';
return $list;
}
	else {
		echo "error";
	}
}

public function date($arr)
{$submit=$_POST['submit'];
	$date = date('m.d.Y h:i:S');
	$date2 = date('m.d.Y h:i:S', strtotime('+50 days'));
	$arr = $date . '-' . $date2;
	
	// get the first 10 characters for the date
	$match = substr($arr, 0, 10);
	echo $match;

}
}*/
	


	
	
?>
