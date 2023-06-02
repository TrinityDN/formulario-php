<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
            font-size: 380%
        }
         hr{
                padding: 1%; 
            }
    </style>
</head>
<body>
    
    <h1>Evento de Jardinagem</h1>
    
<?php
   //Definir as informações de conexão do banco de dados
   $servidor =  "localhost";
   $usuario = "root";
   $senha = "";
   $dbname = "bancoevento";

  //Criar conexão com o banco de dados
  $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

  //Define a consulta SQL para selecionar todos os registros da tabela
  $result_tabela = "SELECT * FROM dados";

  //Executar a consulta SQL e armazenar o resultado na variável
  $resultado_tabela = mysqli_query($conn, $result_tabela);  

  //Imprimir os valores na página
  while($row_usuario = mysqli_fetch_assoc($resultado_tabela)){
      echo "ID: " . $row_usuario['id'] . "<br>";
      echo "Nome: " . $row_usuario['nome'] . "<br>";
      echo "CPF: " . $row_usuario['cpf'] . "<br><";
      echo "Idade: " . $row_usuario['idade'] . "<br>";
      echo "Horário: " . $row_usuario['horario'] . "<br><hr>";
  }
  ?>

</body>
</html>