<?php
  include_once("conexao.php");

  // recuperar os dados
    $codigo = $_POST["cod"];
    $name = $_POST["nome"];
    $fundador = $_POST["fundador"];

    cadastraProdutora($codigo,$name,$fundador);
    
    function cadastraProdutora($cod,$nome,$fund){
      $conexao = conectaBD();  
    
      $dados= "INSERT INTO produtora(CodProdutora, Nome, Fundador) VALUES ({$cod}, '{$nome}', '{$fund}')";
      mysqli_query($conexao, $dados) or die(mysqli_error());
    
      echo "</br> Cadastro com Sucesso!";
    
      desconectaBD($conexao);
    }

  ?>