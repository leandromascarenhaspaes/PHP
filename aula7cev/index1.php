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
            // Iguais
            $a = 3;
            $b = "3";
            $r = $a == $b?"Sim":"Não";
            echo "As variáveis A e B são iguais? $r";

            // Iguais e do mesmo tipo
            $a = 3;
            $b = "3";
            $r = $a === $b?"Sim":"Não";
            echo "<br><br>As variáveis A e B são iguais e do mesmo tipo? $r";
        ?>
    </div>
</body>
</html>
