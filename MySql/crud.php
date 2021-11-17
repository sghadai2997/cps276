<?php
require_once 'PdoMethods.php';
class Crud {

    public function getFiles(){
        $pdo = new PdoMethods();
        
        $sql = "SELECT * FROM files";//files is a table name

        $File = $pdo->selectNotBinded($sql);

        /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
        if($File == 'error'){
            return 'There has been and error processing your request';
        }
        else {
            if(count($File) != 0){
                return $this->display($File);	
            }
            else {
                return 'no files found';
            }
        }
    }


    private function display($File){
       
		$list = '<ul>';
		foreach( $File as $row){ 
			$list .= "<li><a target='_blank' href={$row['file_path']}>{$row['file_name']}</li>";
			/*$count = 1;
				$filename = basename($row['file_path']);
				$list = "<li><a href=./Upload/>file $count</a></li>";
				$count++;*/
		}
			$list .= '</ul>';
			return $list;
		
	}
		
}
	
	


?>