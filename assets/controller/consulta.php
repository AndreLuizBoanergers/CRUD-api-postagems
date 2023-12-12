<?php
require_once('../config/conexao.php');
class ConsultaBancoDados extends ConexaoBancoDados {
	
	public function execConsulta($query, $parametros){
		$stmt = $this->conexao->prepare($query);
		if($stmt){
			if(!empty($parametros)){
				$tipos = str_repeat('s', count($parametros));
				$stmt->bind_param($tipos, ...$parametros);
			}
			$stmt->execute();
			$resultado = $stmt->get_result();
			$stmt->close();
			return true;
		}else{
			$mensagemErro = $this->conexao->error;
            echo json_encode(array('status' => 'erro na consulta', 'mensagem' => $mensagemErro, 'query' => $query, 'parametros' => $parametros));
            return false;
		}
	}
}