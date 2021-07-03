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
            // Contagem progressiva
            $c = 1;
            do {
                echo "$c ";
                $c++;
            } while ($c<=10);
        ?>
        <br><br>
        <?php
            // Contagem regressiva
            $c = 10;
            do {
                echo "$c ";
                $c--;
            } while ($c>=1);
        ?>
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>
