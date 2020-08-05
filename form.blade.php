<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h1>Buat Account baru</h1>
	<h3>Sign Up Form</h3>
	<form action="/welcomee" method="POST">
	@csrf
		<label>First Name</label> 
		<br><br>
		<input type="text" name="first name">
		<br><br>
		<label>Last name</label>
		<br><br>
		<input type="text" name="last name">
		<br><br>
		<label>Gender :</label>
		<br><br>
		<input type="radio" name="Jenkel">Male <br>
		<input type="radio" name="Jenkel">Female <br>
		<input type="radio" name="Jenkel">Other<br><br>
		<label>Nationality :</label>
		<br><br>
		<select>
			<optgroup label="Benua Asia">
				<option>Indonesia</option>
				<option>Jepang</option>
				<option>iran</option>
			</optgroup>
			<optgroup label="Benua Afrika">
			<option>Afrika Selatan</option>
			<option>Nigeria</option>
			<option>Senegal</option>	
			</optgroup>
		</select>
		<br><br>
		<label> Language Spoken :</label><br><br>
		<input type="checkbox">Indonesia <br>
		<input type="checkbox">English <br>
		<input type="checkbox">Other <br><br>
		<label>Bio :</label><br><br>
		<textarea cols="30" rows="10"></textarea><br>
		<input type="submit" value="Sign Up">



		


			
		



	</form>
</body>
</html>