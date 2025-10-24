<?php
$server ="localhost";
$user ="root";
$password = "admin";
$database ="db_sistema_chamado";

$conexao = new mysqli($server,$user,$password,$database);



if ($conexao == false){

echo "erro";

}

?>