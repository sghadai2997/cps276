<?php
function formatName($input)
{
	list($fname, $lname)=explode(" ",$input);
	return $lname.", ".$fname;
}
    Class NameList{
		public function getNames()
		{
			//if the button selcted is AddName(submitted)
		if(isset($_POST['submit'])){
			$text=$_POST['namelist'];
			$name=$_POST['name'];
			//explode is used to split a text(string) into an array=>submitted in the textarea
			$parts=explode("\n",$text);
			//var_dump($parts);

			// we are calling thsi above function to format name(lname,fname)
			$formattedName=formatName($name);
			array_push($parts , $formattedName);

			//sorting an array
			sort($parts);
			//join element of array to string
			$newtext=implode("\n",$parts);
			//return $text;
			return $newtext;
		}
		else if(isset($_POST['reset'])) {
			//return empty string if button is reset
			return "";
		}
	}
	
}


	//get the name the user entered
	//put that name into an array and swiching first and last
	//put that into a string like shaper, scott     $var = $arr[1]+", " + #arr[0]
	//get the names from text area explode on \n
	//add the user entered name to the array you just created
	//sort the array sort()
	//$string = implode("\n",array)    "shaper, scott\nzeb, zebra"
	//return $string back into textarea


	
	?>	