<?php
defined('CONTROL') or die('Acesso Negado!');

//função abaixo destroi todas as variaveis da sessão _session;

session_destroy();

//voltar para pagina incial
header('location:index.php?rota=login');