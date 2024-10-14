<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>3x+1 algoritmas</title>
		<script>
			function changeAction() {
				var selectedVersion = document.getElementById("version").value;
				var form = document.getElementById("form");

				if (selectedVersion === "interface") {
					form.action = "alg1oop.php";
				} else if (selectedVersion === "abstract") {
					form.action = "alg1oop_abstract.php";
				}
			}
		</script>
	</head>
	
	<body>
		<h1>3x+1 algoritmas vienam skaiciui skaiciuoti</h1>
		<form id="form" action="alg1oop.php" method="POST">
			<label for="sk">Iveskite skaiciu:</label>
			<input type="number" id="sk" name="sk">
			<br><br>
			<label for="version">Pasirinkite versiją:</label>
			<select id="version" name="version" onchange="changeAction()">
				<option value="interface">Interface Versija</option>
				<option value="abstract">Abstract Class Versija</option>
			</select>
			<br><br>
			<input type="submit" value="Skaiciuoti">
		</form>
	</body>
</html>
