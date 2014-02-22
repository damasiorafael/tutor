<?php
    include('inc/config.php');

    $controle = false;

    $arrayRequest   = array();
    $arrayCampos    = array();

    $login           = anti_injection($_REQUEST['login']);
    $password        = anti_injection($_REQUEST['password']);

    $tabela     = "users";

    if(selectdbcount($tabela, "username", $login)){
        if(logaBanco($tabela,$login,SHA1($password))){
            $_SESSION['logado'] = "1";
            header('Location: index.php');
        } else {
            $_SESSION['erro_login'] = "Usuário ou senha incorretos, por favor tente novamente!";
            header('Location: login.php');
        }
    }
?>