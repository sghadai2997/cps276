
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>List of Files</title>
</head>
<body>
<div class="container">
<h2>List of Files</h2>
<?php

$file="index.php";
//this link will take us back to fileupload page on web browser or index.php
echo "<a href=$file>Add File </a><br>";

require_once'crud.php';
$displayList= new Crud;
$result=$displayList->getFiles();
echo $result;
/*sql = ('SELECT DISTINCT entered_file_name, file_path FROM files ORDER BY NewName_entered');  

$list = '<ul>';
foreach( $files as $file){ 

$list .= "<li><a target='_blank' href={$file['file_path']}>{$file['NewName_entered']}</li>";
}
$list .= '</ul>';
echo $output;
return $list;?>*/




?>
</div>
</body>
</html>

