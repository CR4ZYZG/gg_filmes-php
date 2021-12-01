<?php

    include_once("conexao.php");

  //recuperar os dados
    $codigo = $_POST["cod"];
    $name = $_POST["nome"];
    $datanasc = $_POST["DataNasc"];
    $datafalec = $_POST["DataFalec"];

    cadastraAtor($codigo,$name,$datanasc,$datafalec);
    
    function cadastraAtor($cod,$nome,$dtnasc,$dtfalec){
      $conexao = conectaBD();  
    
      $dados= "INSERT INTO ator(CodAtor, Nome, DataNasc, DataFalec) VALUES ({$cod}, '{$nome}', '{$dtnasc}', '{$dtfalec}')";
      mysqli_query($conexao, $dados) or die(mysqli_error());
    
      
    
      desconectaBD($conexao);
    }

?>