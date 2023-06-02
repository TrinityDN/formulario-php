<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Jardinagem</title>
</head>
<body>
    <main>
        <div id="direita">
            <h1>Faça parte do evento plantil de plantas, hérbaceas e arbustos</h1>
            <h3>28 de novembro, às 14h30</h3>
            <div id="formulario">
                <form method="post">
                    <label for="">Nome:</label>
                    <input name="campo1" type="text">
                    <label for="">CPF:</label>
                    <input name="campo2"type="text">
                    <label for="">Idade:</label>
                    <input name="campo3" type="text">
                    <label for="">Horário:</label>
                    <input name="campo4" type="time">
                    <input id="btn-confirma" type="submit" value="Confirmar"></input>
                </form>
            </div>
            <p>Avenida Carlos Magna, 30405070</p>
            <div id="plantas">
                <img id="planta" src="img/plantinha.png" alt="">
                <img id="borboleta" src="img/borboleta (2).png" alt="">
            </div>
        </div>
        <div id="esquerda">
        </div>
    </main>

    <?php
    //Conectar com o Banco de Dados
    $conn = mysqli_connect("localhost", "root", "", "bancoevento");

    //Verificar se o formulário foi enviado pelo método POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $campo1 = $_POST['campo1'];
        $campo2 = $_POST['campo2'];
        $campo3 = $_POST['campo3'];
        $campo4 = $_POST['campo4'];

    $sql = "INSERT INTO dados (nome, cpf, idade, horario) VALUES ('$campo1', '$campo2', '$campo3', '$campo4')";

   //Verifica se foi enviado ou ocorreu erro
    if (mysqli_query($conn, $sql)) {
        echo "Inscrição realizada com sucesso!";
    } else {
        echo "Erro ao realizar inscrição!";
    }
    }
    ?> 
</body>