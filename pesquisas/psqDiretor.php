<?php
  include_once("conexao.php");

  // recuperar os dados
  echo "<table border=1 width='100%'>";
  echo "<tr>";
  echo "<td>"."Código"."</td>";
  echo "<td>"."Nome"."</td>";
  echo "<td>"."Data de Nascimento"."</td>";
  echo "<td>"."Data de Falecimento"."</td>";
  echo "</tr>";

   $psq = "SELECT * FROM diretor";

    $conexao = conectaBD();      
    $resultado = mysqli_query($conexao, $psq) or die(mysqli_error());
    while ($registro = mysqli_fetch_array($resultado))
    {
        $cod = $registro['CodDiretor'];
        $nome = $registro['Nome'];
        $data = $registro['DataNasc'];
        $dataf = $registro['DataFalec'];
        echo "<tr>";
        echo "<td>".$cod."</td>";
        echo "<td>".$nome."</td>";
        echo "<td>".$data."</td>";
        echo "<td>".$dataf."</td>";
    
        echo "</tr>" ;
    }

    desconectaBD($conexao);
?>
<!DOCTYPE html>
<html>
    <form action="Editar.html">
        <b>Deseja editar algum dado?</b></br>
    <input type="submit" value="Editar">
    
        
</html>
</br></br>