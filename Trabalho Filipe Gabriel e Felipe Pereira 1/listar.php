<?php
// Chamando os arquivos necessários para as operações
require "conexao.php";
require "RepositorioReceitaCulinária.php";

$repositorio = new RepositorioReceitaCulinária();

//Lista dos valores em uma array, a partir do repositório pessoa
$valores = $repositorio->listar($banco);

foreach($valores as $valor){
    echo "Nome: ".$valor['nome'].PHP_EOL;
}
