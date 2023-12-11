<?php
class ConexaoBancoDados{
	private $host = 'localhost';
	private $usuario = 'root';
	private $senha = '';
	private $banco = 'yeshua';
	private $conexao;

	public function __construct(){
		$this->conectar();
	}

	private function conectar(){
		$this->conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco);

		if(!$this->conexao){
			die(json_encode(array('status'=>'Erro na conexão','mensagem'=> mysqli_connect_error()));
		}
	}

	public function fecharConexao(){
		$this->conexao->close();
	}
}