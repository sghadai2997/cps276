<?php
Class Calculator{
 public function add($num1, $num2){

		return ($num1+ $num2);
	}

	public function subract($num1, $num2){

		return ($num1 - $num2);
	}
	public function multiply($num1, $num2){

		return ($num1 * $num2);
	}
	public function divide($num1, $num2)
	{
		return($num1 / $num2);
		
	}
	public function calc($operator=NULL, $num1=NULL, $num2=NULL)
	{
		if ($operator==NULL || $num1==NULL || $num2===NULL){
			return 'You must enter a string and two numbers'.'<br>';
		}
		else{
			switch($operator){
			case '+':
				return "The sum of the numbers is: " .$num1 + $num2.'<br>';
				break;
			case '-':
				return "The difference of the numbers is: " .$num1 - $num2.'<br>';
				break;
			case '*':
				return "The product of the numbers is: ".$num1 * $num2.'<br>';
				break;
			case '/':
				if($num2!=0){
					return 'The division of the number is: '. $num1/$num2.'<br>';
				}
				else{
					return 'Cannot divide by zero'.'<br>';
				}
				break;
			default:
				 return 'invalid entry';
			}
		}
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<title>Assignment3-ClassCalculator</title>

</head>
<body>

</body>
</html>



