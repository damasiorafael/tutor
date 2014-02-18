<?php
	include('inc/config.php');

	$controle = false;

	$arrayRequest 	= array();
	$arrayCampos	= array();

	$nome 			= anti_injection($_REQUEST['nome']);
	$cpf 			= anti_injection($_REQUEST['cpf']);
	$polo 			= anti_injection($_REQUEST['polo']);
	$cursos 		= anti_injection($_REQUEST['curso1']).", ".anti_injection($_REQUEST['curso2']).", ".anti_injection($_REQUEST['curso3']).", ".anti_injection($_REQUEST['curso4']).", ".anti_injection($_REQUEST['curso5']);
	$endereco 		= anti_injection($_REQUEST['endereco']).", ".anti_injection($_REQUEST['numero']);
	$bairro 		= anti_injection($_REQUEST['bairro']);
	$complemento 	= anti_injection($_REQUEST['complemento']);
	$cep	 		= anti_injection($_REQUEST['cep']);
	$cidade 		= anti_injection($_REQUEST['cidade']);
	$celular 		= anti_injection($_REQUEST['celular']);
	$telefone 		= anti_injection($_REQUEST['telefone']);
	$email	 		= anti_injection($_REQUEST['email']);

	array_push($arrayRequest, $nome);
	array_push($arrayRequest, $cpf);
	array_push($arrayRequest, $polo);
	array_push($arrayRequest, $cursos);
	array_push($arrayRequest, $endereco);
	array_push($arrayRequest, $bairro);
	array_push($arrayRequest, $complemento);
	array_push($arrayRequest, $cep);
	array_push($arrayRequest, $cidade);
	array_push($arrayRequest, $celular);
	array_push($arrayRequest, $telefone);
	array_push($arrayRequest, $email);

	$campos = array_push($arrayCampos, "nome");
	$campos = array_push($arrayCampos, "cpf");
	$campos = array_push($arrayCampos, "polo");
	$campos = array_push($arrayCampos, "cursos");
	$campos = array_push($arrayCampos, "endereco");
	$campos = array_push($arrayCampos, "bairro");
	$campos = array_push($arrayCampos, "complemento");
	$campos = array_push($arrayCampos, "cep");
	$campos = array_push($arrayCampos, "cidade");
	$campos = array_push($arrayCampos, "celular");
	$campos = array_push($arrayCampos, "telefone");
	$campos = array_push($arrayCampos, "email");

	$camposBD	= join($arrayCampos, "|");
	$values 	= join($arrayRequest, "|");
	$tabela		= "inscricoes";
	
	if(!selectdbcount($tabela, "cpf", $cpf)){
		if(gravanobd($tabela, $camposBD, $values)){
			echo "success";
		} else {
			echo "error";
		}
		return true;
	} else {
		echo "Já existe um cadastro utilizando esse CPF.";
		return false;
	}
?>