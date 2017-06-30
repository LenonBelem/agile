<?php

use PHPUnit_Framework_TestCase as PHPUnit;

require "src/Application/Class/Calculadora.Class.php";
/**
*  testes da calculadora
*/
class CalculadoraTest extends PHPUnit
{
	private $resultadoSoma = 4;
	private $resultadoSub = 0;
	
	public function testSoma(){
	// A classe a ser testada é instanciada
	$calc = new Calculadora();

	// Testamos a afirmação que “4” é o resultado de
	// passar “2” e “2” (ou seja, 2 + 2 = 4)
	$this->assertEquals($this->resultadoSoma, $calc->somar(2, 2));
	}

	public function testSubtracao(){
	// idem (veja função acima)
	$calc = new Calculadora();

	$this->assertEquals($this->resultadoSub, $calc->subtrair(2, 2));
	}

}