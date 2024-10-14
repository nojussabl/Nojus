<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>3x+1 algoritmas</title>
	</head>
	
	<body>
		<h1>3x+1 algoritmas vienam skaiciui skaiciuoti</h1>
		<form action="" method="POST">
			<label for="sk">Iveskite skaiciu:</label>
			<input type="number" id="sk" name="sk">
			<input type="submit" value="Skaiciuoti">
		</form>
		
		<?php
			include 'alg1oop.php';
			
			if (isset($_POST['sk'])) { //Check if the form was submitted and the 'sk' field is set
				$sk = intval($_POST['sk']); //get number from the form and convert it into int
				echo "<p>Ivestas skaicius $sk</p>";
				
				$sk = new trys($sk);
				$sk->skaiciuoti();
				$sk->interakciju_skaiciai();
				echo "<br>";
				echo "<p>Interakciju kiekis " . $sk->get_cycles() . "</p>";
			}
		?>
	</body>
</html>




