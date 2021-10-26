<?php

Class Directories{
public function getDir()
{

if(isset($_POST['submit'])){
	$NameofDirectory=$_POST['name'];
	$name=$_POST['namelist'];
}

$path="./directories/".$NameofDirectory."/";
//file_exist check whether a file or directory exist, if file not exist continue creating the directory
if( !file_exists($path))
{
	//create the new directory in the following path and grant them 777 permission
	mkdir("directories/".$NameofDirectory,0777,true);
	chmod("directories/".$NameofDirectory,0777);

// if it sucessfully created a directory then open a file 
	$handle=fopen($path. "readme.txt", "w+") or die("Connot open file");
	fwrite($handle, $name);
	fclose($handle);
	$text= "File and directory is created";
	// location of the readme.txt file in a created directory by a user
	$locationOf_File="/phpmysqltest/phpmysqltest/Assignment5_Dir/$path/readme.txt";
	return " $text <br><a href='$locationOf_File'>Path were file located</a><br>";
}
//else if name of the file or directory exist print the following message
else {
	return "Directory is already exist";
}

}
}

?>