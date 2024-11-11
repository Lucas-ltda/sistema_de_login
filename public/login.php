<?php
defined('CONTROL') or die('Acesso Negado!');
// faz algumas verificações que eu ainda não entendi kkk mas faz com o trafego passe sempre pelo index para verificar o existencia da variavel de controle

// verificar se user e senha foram subemtidas
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $usuario = $_POST['user_input'] ?? null;
    $senha = $_POST['password_input'] ?? null;
    $mensagemErro = null;
    
    if (empty($usuario)|| empty ($senha)) {
        //empty não diz respeito somente a ser vazio mas tbm null 
        $mensagemErro = "User e senha são obrigatorios!";
    }


    // verirficar se usuario e senha existem
    if (empty($mensagemErro)) {
        $usuarios = require_once __DIR__ .'/../inc/usuarios.php';
        // atribuindo os usuarios do arquivo "usuarios" para que o for each percorra e verifique se existe aquele usuario ou não
        foreach($usuarios as $user){
            if ($user['usuario'] == $usuario && password_verify($senha, $user['senha']) ) {
                //login
                $_SESSION['usuario'] = $usuario;
                header('location:index.php?rota=home');
            }
        }
        // mensagem de erro
        $mensagemErro = "Usuario ou senha invalidos";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario do LULU</title>
</head>
<body>
    <h1>Formulario do LULU</h1>
    <form action="index.php?rota=login" method="post">
    <div>
        <label for="user">User</label>
        <input type="text" name="user_input" id="user_input_id"> 
        <!--name vai ser usado para acessar esse valor lá na super global POST no php-->
    </div>
    <div>
        <label for="password">Senha</label>
        <input type="password" name="password_input" id="password_input_id">
    </div>
    <div>
        <button type="submit">Enviar!</button>
    </div>
    <?php if(!empty($mensagemErro)) : ?>
        <p><?= $mensagemErro ?><p> 
    <?php endif;?>   
    </form>
</body>
</html>