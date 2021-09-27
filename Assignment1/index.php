<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<title>Form Project</title>

</head>
<body>
  <div class="container">
	  <form method"POST" action="#">
		<div class="col -2">
		<div class="row">
			<div class="col">
				<label for="fname" class="form-label">First Name: </label>
				<input type="text" id="fname" class="form-control"  name="fname" placeholder="first name">
			</div>
			<div class="col">
				<label for="lname"class="form-label"> Last Name: </label>
				<input type="text" id="lname" class="form-control" name="lname" placeholder="last name">
			</div>
		</div>
		<br>
			
		<label for="Address" class="form- label">Address: </label>
		<input type="text" id="Address" class="form-control" name="Eemailaddres" placeholder="xyz@gmail.com"><br />

		
		<div class="col -3">
		<div class="row g-3">
			<div class="col-md-6">
				<label for="inputCity" class="form-label">City</label>
				<input type="text" class="form-control" id="inputCity">
			 </div>
			 <div class="col-md-4">
				<label for="inputState" class="form-label">State</label>
				<select id="inputState" class="form-select">
				<option value="Califonia"> Califonia</option>
				<option value="Washington"> Washington</option>
				<option value="Michigan" selected > Michigan </option>
				<option value="Florida"> Florida </option>
				<option value="Texas"> Texas</option>
				</select>
			</div>
			<div class="col-md-2">
				<label for="inputZip" class="form-label">Zip</label>
				<input type="text" class="form-control" id="inputZip">
			</div>
		</div>
		</div>

		<br>
		<div>
			 <input type="radio" class="form-check-input" id="Gender" name="gender" value="option1">
			 <label for="Gender" class="form-check-label">Male</label>
			
			 <input type="radio"class="form-check-input" id="Gender" name="gender" value="option2">
			 <label for="Gender"class="form-check-label">Female</label>
		</div>
		
		<button type="submit" class="btn btn-primary">Register</button>

	</form>
  </div>
</body>
</html>