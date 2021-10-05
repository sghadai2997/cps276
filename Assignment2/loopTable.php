<?php
 $rows =15;
 $cols=5;
 $i= 1;
 $j= 1;
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<title>Part3:table_with_NestedLoop</title>
	
	
  </head>
  <body>
	<table class='table-bordered'; style='border:1px solid black'; cellpadding='10px';>
		
	<?php
		for ($i=1;$i<=$rows;$i++)
		{
			echo "<tr>";
			for($j=1;$j<=$cols;$j++)
			{
				echo "<td border:1px solid black; >Row$i Cell $j</td>";
			}
			echo" </tr>\n";
		}
	?>
	</table>
</body>
</html>



