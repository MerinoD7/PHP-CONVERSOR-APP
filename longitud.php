<?php

        $valor = $_POST["valor"];
		$unidad_origen = $_POST["unidad_origen"];
		$unidad_destino = $_POST["unidad_destino"];
// principio solid de Liskov Substitution Principle (LSP)
// Clase base para la medida de longitud
abstract class MedidaLongitud
{
    abstract public function convertir($valor);
}

// Clase para la medida de longitud en metros
class Metro extends MedidaLongitud
{
    public function convertir($valor)
    {
        return $valor;
    }
}

// Clase para la medida de longitud en centímetros
class Centimetro extends MedidaLongitud
{
    public function convertir($valor)
    {
        return $valor / 100;
    }
}

// Clase para la medida de longitud en pulgadas
class Pulgada extends MedidaLongitud
{
    public function convertir($valor)
    {
        return $valor * 0.0254;
    }
}

// Clase para la medida de longitud en pies
class Pie extends MedidaLongitud
{
    public function convertir($valor)
    {
        return $valor * 0.3048;
    }
}

// Clase para la medida de longitud en yardas
class Yarda extends MedidaLongitud
{
    public function convertir($valor)
    {
        return $valor * 0.9144;
    }
}

// Clase para la medida de longitud en millas
class Milla extends MedidaLongitud
{
    public function convertir($valor)
    {
        return $valor * 1609.344;
    }
}

// Clase para la medida de longitud en kilómetros
class Kilometro extends MedidaLongitud
{
    public function convertir($valor)
    {
        return $valor * 1000;
    }
}

// Clase para la medida de longitud en milímetros
class Milimetro extends MedidaLongitud
{
    public function convertir($valor)
    {
        return $valor / 1000;
    }
}

// Uso de la calculadora de longitud
$metros = new Metro();
$centimetros = new Centimetro();
$pulgadas = new Pulgada();
$pies = new Pie();
$yardas = new Yarda();
$millas = new Milla();
$kilometros = new Kilometro();
$milimetros = new Milimetro();

$valor = 10; // Valor a convertir
echo "Valor original: $valor" . PHP_EOL;

// Ejemplo de conversión a diferentes unidades de longitud
echo "Metros: " . $metros->convertir($valor) . PHP_EOL;
echo "Centímetros: " . $centimetros->convertir($valor) . PHP_EOL;
echo "Pulgadas: " . $pulgadas->convertir($valor) . PHP_EOL;
echo "Pies: " . $pies->convertir($valor) . PHP_EOL;
echo "Yardas: " . $yardas->convertir($valor) . PHP_EOL;
echo "Millas: " . $millas->convertir($valor) . PHP_EOL;
echo "Kilómetros: " . $kilometros->convertir($valor) . PHP_EOL;
echo "Milímetros: " . $milimetros->convertir($valor) . PHP_EOL;
