<?php 

namespace Alexander;

class Dba extends \Alexander\Funcionario {

	public function getSalarioLiquido(){
		return $this->salario >= 2000 ? $this->salario * 0.75 : $this->salario * 0.85;
	}
}