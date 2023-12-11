<?php
extract($_POST);
require_once('../config/conexao.php');
require_once('consulta.php');
class AlteraPostagem extends ConexaoBancoDados{
	public function alterarPostagem($postId, $titulo, $subtitulo, $conteudo,$img){
		$query = 'UPDATE site SET titulo = ?, subtitulo = ?, conteudo = ?, img = ? WHERE id = ?';
		$parametros = [$titulo,$subtitulo,$conteudo,$img];
		return $this->execConsulta($query, $parametros);
	}
}
$alterarPostagem = new AlteraPostagem();
$postId = $_POST['id'];
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$conteudo = $_POST['conteudo'];
$linkImg = $_POST['linkImg'];

$resultadoAtualizacao = $alterarPostagem->alterarPostagem($postId, $titulo, $subtitulo, $conteudo, $linkImg);

if($resultadoAtualizacao){
	echo json_encode(array('status'=>'Postagem alterada com sucesso!'));
}else{
	echo json_encode(array('status'=>'Erro ao atualizar a postagem'));
}
$AlteraPostagem->fecharConexao();