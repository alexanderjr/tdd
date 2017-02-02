<?php 

use \Alexander\Funcionario,
    \Alexander\Desenvolvedor, 
    \Alexander\Dba, 
    \Alexander\CalculadoraDeSalarios;

class CalculadoraDeSalarioTest extends PHPUnit_Framework_TestCase {

	public function testDesenvolvedor(){
		$dev = new Desenvolvedor("Alexander", "aafonso.93@gmail.com", 5000);
		$calculadora = new CalculadoraDeSalarios();
		$this->assertEquals(4000, $calculadora->getSalarioLiquido($dev));

		$devJR = new Desenvolvedor("Alexander", "aafonso.93@gmail.com", 1000);
		$this->assertEquals(900, $calculadora->getSalarioLiquido($devJR));

		$devJR2 = new Desenvolvedor("Alexander", "aafonso.93@gmail.com", "sa");
		$this->assertEquals(0, $calculadora->getSalarioLiquido($devJR2));
	}

	public function testDba(){
		$dev = new Dba("Alexander", "aafonso.93@gmail.com", 2000);
		$calculadora = new CalculadoraDeSalarios();
		$this->assertEquals(1500, $calculadora->getSalarioLiquido($dev));

		$devJR = new Dba("Alexander", "aafonso.93@gmail.com", 1000);
		$this->assertEquals(850, $calculadora->getSalarioLiquido($devJR));

		$devJR2 = new Dba("Alexander", "aafonso.93@gmail.com", "sa");
		$this->assertEquals(0, $calculadora->getSalarioLiquido($devJR2));
	}
}