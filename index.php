<!DOCTYPE html>
<html>
<head>
	<title>Kalkulyator</title>
	<style>
		body{
			background-image: radial-gradient( circle farthest-corner at 50.7% 54%,  rgba(204,254,152,1) 0%, rgba(229,253,190,1) 92.4% );
		}
		#cal{
			margin: 10% 30%;
			padding: 100px;
			backdrop-filter: blur(50px);
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
		}
		h1{
			text-align: center;
		}
		#btn{
			background-color: green;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 8px;
			margin-left: 10px;
		}
	</style>
</head>
<body>
	<div id="cal">
	<h1>Kalkulyator</h1>
	<form method="post">
		<label for="num1">Birinchi raqam&nbsp;&nbsp;</label>
		<input type="number" id="num1" name="num1" required><br><br>
		<label for="num2">Ikkinchi raqam&nbsp;&nbsp;</label>
		<input type="number" id="num2" name="num2" required><br><br>
		<label for="operator">Belgilar&nbsp;</label>
		<select id="operator" name="operator">
			<option value="add">+</option>
			<option value="subtract">-</option>
			<option value="multiply">*</option>
			<option value="divide">/</option>
		</select>
		<input id="btn" type="submit" name="calculate" value="Hisoblash">
	</form>
	<?php
	if(isset($_POST['calculate'])) {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operator = $_POST['operator'];

		switch($operator) {
			case 'add':
				$result = $num1 + $num2;
				break;
			case 'subtract':
				$result = $num1 - $num2;
				break;
			case 'multiply':
				$result = $num1 * $num2;
				break;
			case 'divide':
			if($num2 == 0) {
				echo "Error: division by zero.";
				break;
			} else {
				$result = $num1 / $num2;
				break;
			}
			default:
				echo "Invalid operator.";
				break;
		}
		echo "<br>Natija: $result";
	}
	?>
</div>
</body>
</html>