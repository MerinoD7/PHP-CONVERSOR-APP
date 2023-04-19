<!DOCTYPE html>
<html>
<head>
	<title>Resultado de la conversión</title>
</head>
<body>
	<h1>Resultado de la conversión</h1>

	<?php
		// Recuperar los valores enviados desde el formulario
		$valor = $_POST["valor"];
		$unidad_origen = $_POST["unidad_origen"];
		$unidad_destino = $_POST["unidad_destino"];

		// Convertir el valor a la unidad de destino
		switch ($unidad_origen) {
			case "metros":
				switch ($unidad_destino) {
					case "metros":
						$valor_convertido = $valor;
						break;
					case "kilometros":
						$valor_convertido = $valor / 1000;
						break;
					case "pies":
						$valor_convertido = $valor * 3.28084;
						break;
					case "pulgadas":
						$valor_convertido = $valor * 39.3701;
						break;
				}					case "pulgadas":
                    $valor_convertido = $valor * 39370.1;
                    break;
            case "pulgadas":
                switch ($unidad_destino) {
                case "metros":
                    $valor_convertido = $valor / 39.3701;
                    break;
                case "kilometros":
                    $valor_convertido = $valor / 39370.1;
                    break;
                case "pies":
                    $valor_convertido = $valor / 12;
                    break;
                case "pulgadas":
                    $valor_convertido = $valor;
                    break;
            }
        }        
    
    // Mostrar el resultado de la conversión
    echo "<p>$valor $unidad_origen son equivalentes a $valor_convertido $unidad_destino</p>";
?>