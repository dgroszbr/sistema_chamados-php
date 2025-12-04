<?php
// recebendo dados de fora
$tipo =  $_POST['tipo'];
$categoria =  $_POST['categoria'];
$urgencia = $_POST['urgencia'];
$titulo =  $_POST['titulo'];
$descricao = $_POST['descricao'];

// verifica se todos os campos foram preenchidos
if (!$tipo || !$categoria || !$urgencia || empty($titulo) || empty($descricao)) {
    echo "<script>alert('Preencha todos os campos!'); history.back();</script>";
    exit();
}

//include o arquivo de conexão
include 'conexao.php';

//instrução sql para inserir os dados
$insert = "INSERT INTO tb_chamados VALUES (null, $tipo, $categoria, $urgencia, '$titulo', '$descricao')";

//executar a instrução sql dentro do banco de dados utilizando a função query

$query = $conexao->query($insert);

if ($query == true) {
    echo "<script> alert('Chamado cadastrado com sucesso!'); window.location.href='../chamado.php' ;</script>";
}
else {
    echo "<script> alert('Erro ao cadastrar chamado!'); history.back();</script>";
}