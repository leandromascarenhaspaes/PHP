<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $idade = 39;
            $nome = "Leandro";
            echo $nome;
            echo "<br>Olá, Mundo!<br>";
            echo "Olá, Mundo!<br>";
            echo $nome. " tem ".$idade." anos.<br>";
            echo "$nome tem $idade anos.";
        ?>
    </div>
</body>
</html>
