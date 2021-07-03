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
            //Digite uma das urls abaixo no navegador
            // http://localhost/aulaphp/index.php?a=5&b=3&op=m
            // http://localhost/aulaphp/index.php?a=5&b=3&op=s
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"];
            echo "Os valores passados foram $n1 e $n2.<br>";
            $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
            echo "O resultado será $r"
        ?>
    </div>
</body>
</html>
