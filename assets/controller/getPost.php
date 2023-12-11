<?php 

require_once('../config/conexao.php');
require_once('consulta.php');

$consulta = new ConsultaBancoDados();

$query = 'SELECT * FROM site LIMIT 3';
$parametros = [];
$resultadoConsulta = $consulta->execConsulta($query, $parametros);
$postagems = [];
if($resultadoConsulta){
	while ($post = $resultadoConsulta->fetch_assoc()){
		array_push($postagems, json_encode(array('titulo'=>$post['titulo'],'subtitulo'=>$post['subtitulo'],'conteudo'=>$post['conteudo'],'img'=>$post['linkImg'])));
	}
}
echo $postagems;
$consulta->fecharConexao();