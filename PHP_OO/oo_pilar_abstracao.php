<?php 

  class Funcionario {
  	
  	#atributos

  	public $nome = null;
  	public $telefone = null;
  	public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

  	#metodos 

    function __set($atributo,$valor){
      $this->$atributo = $valor; 
    }

    function __get($atributo){
      return $this->$atributo;
    }

  

/*
    function setNome($nome) {
      $this->nome = $nome;
    }

    function setNumFilhos($numFilhos) {
      $this->numFilhos = $numFilhos;
    }

    function setTelefone($telefone) {
      $this->telefone = $telefone;
    }

    function getNome() {
      return $this->nome;
    }

    function getNumFilhos() {
      return $this->numFilhos;
    }

    function getTelefone() {
      return $this->telefone;
    }

  */
    	function resumirCardFunc() {

  	  return "$this->nome possui $this->numFilhos filhos(s)";

  	}

  	function modificarNumFilhos($numFilhos) {

      $this->numFilhos = $numFilhos;

  	}
  }


  $x = new Funcionario();

  $x->__set('nome','José');
  $x->__set('telefone','99999-8888');
  $x->__set('numFilhos', 1);
  $x->__set('cargo', 'gerente');
  $x->__set('salario', 15000);

  echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ', cargo ' . $x->__get('cargo') . ' salario ' . $x->__get('salario') . ' contato ' . $x->__get('telefone');

?>