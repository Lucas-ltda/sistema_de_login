<?php

//iniciar a sessão

session_start();

//constante de controle
define('CONTROL', true);

//verifica se existe um usuário logado
$usuario_logado =  $_SESSION['usuario'] ?? null;

//verifica qual a rota
if(empty($usuario_logado)){
    $rota = 'login';
}else{
    $rota = $_GET['rota'] ?? 'home';
}

// usuario já logado, mas tentando acessar login.php
if(!empty($usuario_logado) && $rota == 'login'){
    //redireciona para a home
    $rota = 'home';
}

//listagem das rotas
$rotas = [
    'login' => 'login.php',
    'home' => 'home.php',
    'logout' => 'logout.php'
];

if(!key_exists($rota,$rotas)){
    die('Erro! Acesso negado!');
}

require_once $rotas [$rota];