<?php
 
  function conectaBD(){
   $servername = "localhost";
   $database = "gg_filmes"; 
   $username = "root";
   $password = "nothing";

   // criar conexão
   $conn = mysqli_connect($servername,$username,$password,$database);
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error()); 
   }else{
    
   }

   return ($conn);
  
  }// final da Função  
   
//-----------------------------//
   function desconectaBD($conn){
      mysqli_close($conn);
  }

?>