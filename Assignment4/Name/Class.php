<?php
    Class NameList{
		public function getNames()
		{$name = "John Mike \n Carol Tike \n Mona Lisa";
			$parts=explode("  ",$name,2);
			//$conversionArray=explode("  ",$name,2);
			//$name1=$lname.",".$fname;
			if(count($parts)!=NULL){
			foreach($parts as $key)
			{ $Arr=explode("\n",$key);
				$output=$Arr[1]."\n".$Arr[0];
				
			
				return $output;
			}
		}
	}
}
	
	?>	