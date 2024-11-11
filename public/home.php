<?php
defined('CONTROL') or die('Acesso Negado!');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Logado!!</h1> <br>
    <p>Olá <strong><?= $_SESSION['usuario'] ?></strong></p> <br>
    <hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut reiciendis quo odit id at assumenda harum tenetur dolor eius saepe quasi, reprehenderit et voluptate atque perspiciatis impedit, quos optio. Illum odio reiciendis non ipsum repellendus sequi consectetur laborum, placeat neque quisquam nemo quia! Facere veritatis sint officiis dolores a saepe sit voluptatum autem adipisci. Autem?</p><br>
    <hr>
    <a href="?rota=logout">Sair </a>
</body>
</html>