<<?php
require 'PdoMethods.php';

class Crud {

    public function getDateTime(){
        $pdo = new PdoMethods();
        
       // $sql = "SELECT * FROM dates WHERE(date_time as Date) BETWEEN '$begin' And '$end' ORDER BY dates ";files is a table name
$sql= "SELECT * FROM dates";
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
	foreach($File as $row)
	{
		if($row['date_time']>=$_POST['begDate'] && $row['date_Time']<=$_POST['endDate']){
			//$list = array("date_time"=>$row['date_time'],"note"=>$row['notes']);
			//$list .= "<li>Date: {$row['date_time']} {$row['notes']} </li>";
			$timestamp =date("Y-m-d", strtotime('date_time'));
		$DateTime=getdate($timestamp);
		$list="<tr><td>Note taken on $DateTime</td><td> notes:{$row['notes']}</td></tr>";
	}
}

$list='</tr>';
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
}

	

	





?>