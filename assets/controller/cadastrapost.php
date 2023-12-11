<?php
require_once('../config/conexao.php');
require_once('consulta.php');
extract($_POST);

class CadastroPostagem extends conexaoBancoDados {
	public function cadastrarPostagem($titulo,$subtitulo,$conteudo,$imagem){
		$query = 'INSERT INTO site (titulo, subtitulo, postagem, img) VALUES (?, ?, ?, ?)';
		$parametros = [$titulo, $subtitulo, $conteudo, $linkimg];
		return $this->execConsulta($query,$parametros);
	}
}

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$conteudo = $_POST['conteudo'];
$linkImg = $_POST['linkImg'];

$cadastro = new CadastroPostagem();
$resultadoCadastro = $cadastro->cadastrarPostagem($titulo, $subtitulo, $conteudo, $linkimg);

if($resultadoCadastro){
	echo json_encode(array('status'=>'Postagem cadastrada com sucesso!'));
}else{
	echo json_encode(array('status'=>'Erro ao cadastrar postagem.'));
}

$cadastro->fecharConexao();