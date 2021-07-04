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
            $n = isset($_GET["num"])?$_GET["num"]:1;
            echo "Analisando o número $n ...";
            echo "Valores múltiplos: ";
            $mult = 0;
            for ($c = 1; $c <= $n; $c++) {
                 if ($n % $c == 0) {
                     $mult++;
                     echo "$c ";
                 }
             }
             echo "<p> Total de múltiplos: $mult </p>";
             echo "Resultado: $n ";
             if ($mult <= 2) {
                 echo " É PRIMO! ";
             } else {
                 echo " NÃO É PRIMO! ";
             }
        ?>
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>
