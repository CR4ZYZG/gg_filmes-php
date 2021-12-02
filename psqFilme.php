<?php
  include_once("conexao.php");

  // recuperar os dados
  echo "<table border=1 width='100%'>";
  echo "<tr>";
  echo "<td>"."Código"."</td>";
  echo "<td>"."Titulo"."</td>";
  echo "<td>"."Ano de Lançamento"."</td>";
  echo "<td>"."Código Produtora"."</td>";
  echo "<td>"."Código Genero"."</td>";
  echo "<td>"."Código Ator"."</td>";
  echo "<td>"."Código Diretor"."</td>";
  echo "</tr>";

   $psq = "SELECT * FROM filme";

    $conexao = conectaBD();      
    $resultado = mysqli_query($conexao, $psq) or die(mysqli_error());
    while ($registro = mysqli_fetch_array($resultado))
    {
        $cod = $registro['CodFilme'];
        $titulo = $registro['Titulo'];
        $data = $registro['DataLancamento'];
        $cp = $registro['CodProdutora'];
        $cg = $registro['CodGenero'];
        $ca = $registro['CodAtor'];
        $cd = $registro['CodDiretor'];
        echo "<tr>";
        echo "<td>".$cod."</td>";
        echo "<td>".$titulo."</td>";
        echo "<td>".$data."</td>";
        echo "<td>".$cp."</td>";
        echo "<td>".$cg."</td>";
        echo "<td>".$ca."</td>";
        echo "<td>".$cd."</td>";
    
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