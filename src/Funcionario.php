<?php 

namespace Alexander;
use \Alexander\Desenvolvedor;

class Funcionario {

	protected $nome;
	protected $email;
	protected $salario;
	protected $cargo;

	public function __construct($nome = "", $email = "", $salario = 0){
		$this->nome    = $nome;
		$this->email   = $email;
		$this->salario = is_numeric($salario) ? $salario : 0;
	}
}