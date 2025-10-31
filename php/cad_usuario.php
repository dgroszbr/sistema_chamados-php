<?php 
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$confirmarSenha = $_POST["conf_senha"];


echo "Seu nome é" . $nome;
echo "<br>";
echo "Seu email é" . $email;
echo "<br>";
echo "Seu senha é" . $senha;

//incluir o arquivo php
include 'conexao.php';


//instução sql para inserir dados 
$insert = "INSERT INTO tb_usuario VALUE (null,'$nome','$email','$senha')";


$query = $conexao ->query($insert);

if($query == true){
echo "<script>     alert('usuario cadastrado com sucesso'); window.location.hraf = '../index.html'     </script>";



}


?>