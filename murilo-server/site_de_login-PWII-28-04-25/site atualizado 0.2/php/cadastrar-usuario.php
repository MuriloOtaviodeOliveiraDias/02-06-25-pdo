<?php

include("conexao.php");
echo "Estou utilizando PHP";
try {
    //verificar se o nome do usuario já existe

    $varVerifica = $pdo->prepare("SELECT COUNT(*) FROM login WHERE usuario = :usuario");

    $varVerifica->bindParam(':usuario', $usuario);

    $varVerifica->execute();

    if ($varVerifica->fetchColumn() > 0) {

        echo 'Usuário(a) já existe ou Usuário(a) já foi cadastrado(a)';
        exit;
        //$usuario - $varVerifica->fetch(PDO::FETCH_ASSOC);
    }
    //criptografar a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
    //iniciar uma trasação
    $pdo->beginTransaction();

    //Cadastrar/Inserir usuários na tabela de login

    $varLogin = $pdo->prepare('INSERT INTO login (usuario, senha) VALUES (:usuario, :senha)');
    $varLogin->bindParam(':usuario', $usuario);
    $varLogin->bindParam(':senha', $senha);
    $varLogin->execute();

    // preciso pegar o ID do login, para inserir na tabela usuáriom pois existe um relacionamento entre elas.
    $id_login = $pdo->lastInsertId();

    //Cadastrar/Inserir usuários na tabela de usuario
    $varUsuario = $pdo->prepare('INSERT INTO usuario (nome, email, id_login) VALUES (:nome, email, :id_login)');
    
    $varUsuario->bindParam(':id_login', $id_login);
    $varUsuario->bindParam(':id_login', $nome);
    $varUsuario->bindParam(':id_login', $email);
    $varUsuario->execute();
    
    $pdo->commit();
    echo'Cadastros Realizado com Sucesso!';

}catch(PDOException $e) {

    $pdo->rollBack();
    echo"Erro ao Cadastrar". $e->getMassage();

}
?>