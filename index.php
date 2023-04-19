<!DOCTYPE html>
<html>
<head>
	<title>Conversor de unidades</title>
</head>
<body>
	<h1>Conversor de unidades</h1>

	<form method="post" action="Resultado.php">
		<label for="input_valor">Ingrese el valor:</label>
		<input type="text" id="input_valor" name="valor" required>
		<br>
		<label for="select_unidad_origen">Unidad de origen:</label>
		<select id="select_unidad_origen" name="unidad_origen" required>
			<option value="metros">Metros</option>
			<option value="kilometros">Kilómetros</option>
			<option value="pies">Pies</option>
			<option value="pulgadas">Pulgadas</option>
		</select>
		<br>
		<label for="select_unidad_destino">Unidad de destino:</label>
		<select id="select_unidad_destino" name="unidad_destino" required>
			<option value="metros">Metros</option>
			<option value="kilometros">Kilómetros</option>
			<option value="pies">Pies</option>
			<option value="pulgadas">Pulgadas</option>
		</select>
		<br>
		<button type="submit">Convertir</button>
	</form>

</body>
</html>
