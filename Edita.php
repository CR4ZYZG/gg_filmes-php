<?php

    include_once("conexao.php");

  //recuperar os dados
    $valor = $_POST["Editar"];

    edição($valor);
    
    function edição($vl){
      $conexao = conectaBD();  
    
      $dados = $vl;
      mysqli_query($conexao, $dados) or die(mysqli_error());
    
      
    
      desconectaBD($conexao);
    }

    

?>
<html>
    <form action="pesquisa.html">
        <b> Clique para voltar a area de vizualização</b> 
    </br>
        </br>
        <input type="submit" value="voltar">
</html>