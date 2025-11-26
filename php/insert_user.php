<?php 
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$confirmarSenha = $_POST["conf_senha"];

if ($senha !== $confirmarSenha) {
    echo "<script>alert('As senhas não coincidem.'); window.history.back();</script>";
    exit;
}

//incluir o arquivo php
include 'conexao.php';

echo "Seu nome é" . $nome;
echo "<br>";
echo "Seu email é" . $email;
echo "<br>";
echo "Seu senha é" . $senha;



//instução sql para inserir dados 
$insert = "INSERT INTO tb_usuario VALUE (null,'$nome','$email','$senha')";


$query = $conexao ->query($insert);

if($query == true){

    echo "<script>alert('Usuário cadastrado com sucesso'); window.location.href = '../index.html';</script>";
    exit;

}else{


    echo "<script>alert('Erro ao cadastrar usuário'); window.history.back();</script>";
    exit;
}



?>