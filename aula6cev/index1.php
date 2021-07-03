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
            // Digitar no navegador a url abaixo, por exemplo
            //http://localhost/aulaphp/index.php?aa=2021
            $anoatual = $_GET["aa"];
            echo "O ano atual é $anoatual e o ano anterior é ". --$anoatual .".";
        ?>
    </div>
</body>
</html>
