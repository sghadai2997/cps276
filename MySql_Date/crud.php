<<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

require 'PdoMethods.php';

class Crud {

    public function getDateTime(){
        $pdo = new PdoMethods();
		$begin=date('Y-m-d',strtotime($_POST['begDate']));
		$end=date('Y-m-d',strtotime($_POST['endDate']));
	
        
		//$sql="SELECT DATE_FORMAT(date_time,'%Y-%m-%d') FROM dates";
//$sql= "SELECT * from dates";
$sql="select * from `dates` where date_time between '$begin' and '$end'";
        $File = $pdo->selectNotBinded($sql);

        // IF THERE WAS AN ERROR DISPLAY MESSAGE 
        if($File == 'error'){
            return 'There has been and error processing your request';
        }
        else {
            if(count($File) != 0){
			
                return $this->display($File);	
			   //if($type == 'list'){return $this->createList($File);}
				//if($type == 'input'){return $this->createInput($File);
            }
            else {
                return 'no files found';
            }
		}
	}
		


	//THIS FUNCTION TAKES THE DATA FROM THE DATABASE AND RETURN AN UNORDERED LIST OF THE DATA*/
	public function display($File){

	date_default_timezone_set('America/Detroit');
	$list='<tr>';

	/*foreach($File as $row)
	{
		//if($row['date_time']>=$_POST['begDate'] && $row['date_Time']<=$_POST['endDate']){
			$list .= "<li>Date: {$row['date_time']} {$row['notes']} </li>";
			$first_date=mktime(0,0,0,intval(date("m")),1);
			$next_month_timestamp=strtotime("+1 month");
			$firstOf_next=mktime(0,0,0,intval(date("m",$next_month_timestamp)),1,intval(date("y",$next_month_timestamp)));
		
			//$timestamp =date("Y-m-d", strtotime('-2 months'));
		//$DateTime=getdate($timestamp);
		$list="<tr><td>Note taken on $firstOf_next
		</td><td> notes:{$row['notes']}</td></tr>";
	*/
	//while($row = $File->fetch_array()){
		foreach($File as $row){
		$list='<tr>';
		 $list .= "<td>Date: {$row['date_time']} </td><td>{$row['notes']} </td>";	
		
		 $timestamp =date("Y-m-d", strtotime($row['date_time']));
		$start_date=strtotime('2021-11-01');
		 $end_date=strtotime('2021-11-31');
 
		 if($timestamp<$start_date && $timestamp>=$end_date){
			 die('Date doesnot fall within valid range');
		 
		 }

		
		echo "<tr><td>Date:   $timestamp
		</td><td> notes:   {$row['notes']}</td></tr>";
			
		
			$list='</tr>';
	
}

//$list='</tr>';
echo $list;

}
	

/*private function createList($File){
	$list = '<ol>';
	foreach ($File as $row){
		$list .= "<li>Date: {$row['date_time']} {$row['notes']} </li>";
	}
	$list .= '</ol>';
	return $list;
}

//THIS FUNCTION TAKES THE DATA AND RETURNS THE DATA IN INPUT ELEMENTS SO IT CAN BE EDITED.  
private function createInput($File){
	$output = "<form method='post' action='update_delete_name.php'>";
	//$output .= "<input class='btn btn-success' type='submit' name='update' value='Update'>";
	//$output .= "<input class='btn btn-danger' type='submit' name='delete' value='Delete'>";
	$output .= "<table class='table table-bordered table-striped'><thead><tr>";
	$output .= "<th>Date Time</th><th> Notes</th><tbody>";
	foreach ($File as $row){
		$output .= "<tr><td><input type='text' class='form-control' name='fname^^{$row['id']}' value='{$row['date_time']}'></td>";

		$output .= "<td><input type='text' class='form-control' name='lname^^{$row['id']}' value='{$row['notes']}'></td></tr>";

		//$output .= "<td><input type='text' class='form-control' name='color^^{$row['id']}' value='{$row['eye_color']}'></td>";

		//$output .= "<td><input type='text' class='form-control' name='gender^^{$row['id']}' value='{$row['gender']}'></td>";

		//$output .= "<td><input type='text' class='form-control' name='state^^{$row['id']}' value='{$row['state']}'></td>";

		//$output .= "<td><input type='checkbox' name='inputDeleteChk[]' value='{$row['id']}'></td></tr>";
	}
	
	$output .= "</tbody></table></form>";
	return $output;
}*/


/*public function date(){	
	$statement = $_POST['date'];
$year = substr($statement, 0, -12);
	$month = substr($statement, 5, -9);
	$day = substr($statement, 8, -6);
	$hour = substr($statement, 11, -3);
	$minute = substr($statement, 14);
	$noteTime = mktime($hour, $minute, 30, $month, $day, $year);
	$first_date=mktime(0,0,0,intval(date("m")),1);
	$next_month_timestamp=strtotime("+1 month");
	$firstOf_next=mktime(0,0,0,intval(date("m",$next_month_timestamp)),1,intval(date("y",$next_month_timestamp)));
return $noteTime;
}*/

}



?>