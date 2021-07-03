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
            /*$n1 = 3;
            $n2= 2;*/
            // Digitar a url abaixo no navegador
            // http://localhost/aulaphp/index.php?a=8&b=5
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $s = $n1 + $n2;
            echo "A soma entre $n1 e $n2 é igual a $s.";
            echo "<br> A subtração é igual a ".($n1-$n2).".";
            echo "<br> A multiplicação é igual a ".($n1*$n2).".";
            echo "<br> A divisão é igual a ".($n1/$n2).".";
            echo "<br> O módulo é igual a ".($n1%$n2).".";
            echo "<br> A média é igual a ".(($n1+$n2)/2).".";
        ?>
    </div>
</body>
</html>
