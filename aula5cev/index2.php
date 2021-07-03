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
            // Digitar a url abaixo no navegador
            // http://localhost/aulaphp/index.php?x=4&y=-3
            // Para potenciação trocar o sinal do 3 deixando-o positivo e para arredondamento colocar 3.4
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            echo "Os valores recebidos são $v1 e $v2.";
            echo "<br>O valor absoluto de $v2 é ". abs($v2).".";
            echo "<br>O valor de $v1<sup>$v2</sup> é ". pow($v1,$v2).".";
            echo "<br>A raiz de $v1 é ". sqrt($v1).".";
            echo "<br>O arredondamento de $v2 é ". round($v2)."."; // usar "ceil" arredonda para cima e usar "floor" arredonda para baixo.
            echo "<br> A parte inteira de $v2 é ". intval($v2).".";
            echo "<br>O valor de $v1 em moeda é R$".number_format($v1, 2, ",", ".").".";
        ?>
    </div>
</body>
</html>
