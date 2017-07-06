<?php
require "Class/Calculadora.Class.php";

$Calc = new Calculadora();

$soma = $Calc->somar(3,4);

echo "A soma de 3 + 4 : {$soma}";