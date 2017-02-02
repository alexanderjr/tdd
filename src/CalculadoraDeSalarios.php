<?php 

namespace Alexander;

class CalculadoraDeSalarios {

	public function getSalarioLiquido(\Alexander\Funcionario $funcionario){
		return $funcionario->getSalarioLiquido();
	}
}