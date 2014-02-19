<?php
	//VARIAVEIS DE AMBIENTE
	session_start();
	$_SESSION[‘NOME’] = "damasio";
	//echo $_SESSION[‘NOME’];

	if($_SERVER['SERVER_NAME'] == "localhost"){
		$host 	= "localhost";
		$user 	= "root";
		$pass 	= "damasio";
		$dbname	= "tutor";
	} else {
		//admin
		//Mkt#2014
		$host 	= "localhost";
		$user 	= "admin";
		$pass 	= "Mkt#2014";
		$dbname	= "tutor";
	}

	//CONEXAO COM BANCO DE DADOS
	$conect = mysql_connect($host, $user, $pass);
	//CASO DE ERRO DE CONEXAO IMPRIME A MENSAGEM
	if (!$conect) die ("<h1>Falha na coneco com o Banco de Dados!</h1>");
	//SE A CONEXAO FOR BEM SUCEDIDA
	$db = mysql_select_db($dbname);
	//FINAL DA CONEXAO COM BANCO DE DADOS

	/* SQL INJECTION PROTECTION */
	function anti_injection($sql) {
	    $sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "", $sql);
	    $sql = trim($sql); 
	    $sql = strip_tags($sql);
	    $sql = addslashes($sql);
	    return $sql;
	}

	// FUNÇÃO PARA SELECT NO DB
    function selectdbcount($tabela,$campo,$valor){
        //Trata os campos para o BD
        $campos = $campo;
        $checa = "SELECT * FROM $tabela WHERE $campo = '$valor'";
        //CHECA NO BANCO DE DADOS
		$checar = mysql_query($checa);
		if(mysql_num_rows($checar) >= 1){
			return true;
		} else {
			return false;
		}
	}

	// FUNÇÃO PARA SELECT NO DB
    function logaBanco($tabela,$user,$password){
        $checa = "SELECT username FROM users WHERE username = '$user' AND senha = '$password'";
        //CHECA NO BANCO DE DADOS
		$checar = mysql_query($checa);
		if(mysql_num_rows($checar) >= 1){
			return true;
		} else {
			return false;
		}
	}
?>