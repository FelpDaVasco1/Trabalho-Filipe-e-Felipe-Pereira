<?php

class RepositorioReceitaCulinária{
    
    public function cadastrar(ReceitaCulinária $receitaculinária, PDO $pdo){
        //Preparando a instrução SQL para criar o registro na tabela
        $codigoSql = "INSERT INTO RECEITACULINÁRIA(nome,ingredientes,modopreparo,tempocozimento,paísorigem) VALUES (:c,:n,:i)";
    
        $nome = $pessoa->exibirnome();
        $ingredientes = $pessoa->exibiringredientes();
        $modopreparo = $pessoa->exibirmodopreparo();
        $tempocozimento = $pessoa->exibiritempocozimento();
        $paísorigem = $pessoa->exibirpaísorigem();

        //Vou preparar as instruções
        $inserir = $pdo->prepare($codigoSql);
        //Definindo o valor dos parâmetros
        $inserir->bindParam(":c",$nome);
        $inserir->bindParam(":n",$ingredientes);
        $inserir->bindParam(":i",$modopreparo);
        $inserir->bindParam(":i",$tempocozimento);
        $inserir->bindParam(":i",$paísorigem);
        //Executa o comando de inserir no banco
        $inserir->execute();
    }

    public function listar(PDO $banco) {
        $sql = "SELECT * FROM PESSOA";

        //Executa o sql do banco 
        $select = $banco->query($sql);

        //Estrutura os valores como obtidos pelo $select como um vetor indexado 
        return $select->fetchAll(PDO::FETCH_ASSOC); 
    }
}