<?php
  include_once("conexao.php");

  // recuperar os dados
  echo "<table border=1 width='100%'>";
  echo "<tr>";
  echo "<td>"."Código"."</td>";
  echo "<td>"."Descrição"."</td>";
  echo "</tr>";

   $psq = "SELECT * FROM genero";

    $conexao = conectaBD();      
    $resultado = mysqli_query($conexao, $psq) or die(mysqli_error());
    while ($registro = mysqli_fetch_array($resultado))
    {
        $cod = $registro['CodGenero'];
        $nome = $registro['Descricao'];
        
        echo "<tr>";
        echo "<td>".$cod."</td>";
        echo "<td>".$nome."</td>";
        
    
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