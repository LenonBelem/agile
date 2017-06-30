<?php
/**
* Classe Calculadora
*/
class Calculadora 
{
	
	/*
		recebe dois numeros como parâmetros e retorna a soma dos dois
	*/
	function somar($a,$b){
		return $a + $b;
	}
	/*
		recebe dois numeros como parâmetros e retorna a subtração dos dois
	*/
	function subtrair($a,$b){
		return $a - $b;
	}
	/*
		recebe dois numeros como parâmetros e retorna a multiplicação do primeiro pelo segundo
	*/
	function multiplicar($a,$b){
		return $a * $b;
	}
	/*
		recebe dois numeros como parâmetros e retorna a divisão do primeiro pelo segundo
	*/
	function dividir($a,$b){
		return $a / $b;
	}
}