<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="02valor.php">
        <?php
        $c =1;
        while ($c <= 5) {
           echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br>";
        $c++;
        };
        ?>
        <input type="submit" class="botao" value="Enviar"/>
    </form>
</div>
</body>
</html>
 