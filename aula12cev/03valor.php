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
            $v = isset($_GET["tab"])?$_GET["tab"]:1;
            echo "<h1> A tabuada do $v é:</h1>";
            $c = 1;
            $res = 0;
            do {
                $res = $v * $c;
                echo "$v x $c  = $res<br>";
                $c++;
            } while($c<=10);
        ?>
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>
