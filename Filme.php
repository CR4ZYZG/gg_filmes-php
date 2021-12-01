<?php
  include_once("conexao.php");

  // recuperar os dados
    $codigo = $_POST["cod"];
    $name = $_POST["nome"];
    $dtLanc = $_POST["dataLanc"];
    $CP = $_POST["codProd"];
    $CG = $_POST["codGen"];
    $CA = $_POST["codAtor"];
    $CD = $_POST["codDire"];
    
    

    cadastraFilme($codigo,$name,$dtLanc,$CP,$CG,$CA,$CD);
    
    function cadastraFilme($cod,$nome,$DL,$CoP,$CoG,$CoA,$CoD){
      $conexao = conectaBD();  
    
      $dados= "INSERT INTO filme(CodFilme, Titulo, DataLancamento, CodProdutora, CodGenero, CodAtor, CodDiretor) VALUES ({$cod}, '{$nome}', '{$DL}', '{$CoP}','{$CoG}','{$CoA}','{$CoD}')";
      mysqli_query($conexao, $dados) or die(mysqli_error());
    
      echo "</br> Cadastro com Sucesso!";
    
      desconectaBD($conexao);
    }

?>