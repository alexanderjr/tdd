<?php 

namespace Alexander;

class Desenvolvedor extends \Alexander\Funcionario {

	public function getSalarioLiquido(){
		return $this->salario >= 3000 ? $this->salario * 0.8 : $this->salario * 0.9;
	}
}