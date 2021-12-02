<?php
  include_once("conexao.php");

  // recuperar os dados
    $codigo = $_POST["cod"];
    $name = $_POST["nome"];

    cadastraGenero($codigo,$name);
    
    function cadastraGenero($cod,$nome){
      $conexao = conectaBD();  
    
      $dados= "INSERT INTO genero(CodGenero, Descricao) VALUES ({$cod}, '{$nome}')";
      mysqli_query($conexao, $dados) or die(mysqli_error());
    
      echo "</br> Cadastro com Sucesso!";
    
      desconectaBD($conexao);
    }

?>