<?php
extract($_POST);
$postId = $_POST['id'];
require_once('../config/conexao.php');
require_once('consulta.php');

class DeletaPostagem extends ConexaoBancoDados {
	public function deletarPostagem($postId){
		$query = 'DELETE FROM site WHERE id = ?';
		$parametros = [$postId];
		return $this->execConsulta($query, $parametros);
	}
}
$deletaPostagem = new DeletaPostagem();
$resultadoDelete = $deletaPostagem->deletarPostagem($postId);

if($resultadoDelete){
	echo json_encode(array('status'=>'Postagem deletada com sucesso!'));
}else{
	echo json_encode(array('status'=>'Erro ao deletar postagem.'));
}
$deletaPostagem->fecharConexao();