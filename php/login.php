<?php
// RECEBER OS DADOS DA TELA DE LOGIN
$email = $_POST['email'];
$senha = $_POST['senha'];


if($email == null){
    echo "<script>alert('digite o email ou senha'); history.back() </script>";
    
}

// INCLUINDO O ARQUIVO DE CONEXÃO 
include 'conexao.php';

// INSTRUÇÃO DO SQL PARA CAPTURAR USUARIO DIGITADO NA TELA DE LOGIN
$select = "SELECT * FROM tb_usuario WHERE email = '$email'";

// FUNÇÃO QUERY EXECUTA O SELECT DENTRO DO BANCO
$query = $conexao->query($select);

// ARMAZENA A 1ª LINHA DO BD DENTRO DA VARIAVEL RESULTADO 
$resultado = $query->fetch_assoc(); 

//print_r($_POST);
//print_r($resultado);

// 
$email_banco = $resultado ['email'];
$senha_banco = $resultado ['senha'];

// COMPARA INFORMAÇÕES DO INDEX COM O BANCO
if ($email == $email_banco && $senha == $senha_banco) {
    //header('location: ../home.html');
    echo "<script> window.location.href='../home.html'; </script>";

}else {
   echo "<script>alert('Usuário ou Senha incorreto'); history.back() </script>";
}

?>