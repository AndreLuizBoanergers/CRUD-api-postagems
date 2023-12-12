<?php
header('Content-Type: application/json');
require_once('../config/conexao.php');
require_once('consulta.php');
$json = file_get_contents('php://input');
$data = json_decode($json);
class CadastroPostagem extends ConsultaBancoDados {
	public function __construct(){
		parent::__construct();
	}
	public function cadastrarPostagem($titulo,$subtitulo,$conteudo,$linkImg){
		$query = 'INSERT INTO site (titulo, subtitulo, postagem, img) VALUES (?, ?, ?, ?)';
		$parametros = [$titulo, $subtitulo, $conteudo, $linkImg];
		$resultado = $this->execConsulta($query, $parametros);
		if($resultado){
			return true;
		}else{
			return false;
		}
	}
}


$titulo = $data->titulo;
$subtitulo = $data->subtitulo;
$conteudo = $data->conteudo;
$linkImg = $data->linkImg;

$cadastro = new CadastroPostagem();
$resultadoCadastro = $cadastro->cadastrarPostagem($titulo, $subtitulo, $conteudo, $linkImg);

if($resultadoCadastro){
	echo json_encode(array('status'=>'Postagem cadastrada com sucesso!'));
}else{
	echo json_encode(array('status'=>'Erro ao cadastrar postagem.',"debug"=>$data));
}

$cadastro->fecharConexao();