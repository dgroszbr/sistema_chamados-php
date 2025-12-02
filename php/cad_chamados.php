<?php
// recebendo dados de fora
$tipo =  $_POST['tipo'];
$categoria =  $_POST['categoria'];
$urgencia = $_POST['urgencia'];
$titulo =  $_POST['titulo'];
$descricao = $_POST['descricao'];


//include o arquivo de conexão
include 'conexao.php';

//instrução sql para inserir os dados
$insert = "INSERT INTO tb_chamados VALUE ()";

//executar a instrução sql dentro do banco de dados utilizando a função query

$query = $conexao->query($insert);

if ($query == true) {
    echo "<script> alert('Usuario cadastrado sucesso!'); history.back() </script>";
}