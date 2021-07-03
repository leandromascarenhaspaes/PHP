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
            $a = 3;
            $b = $a;
            $b += 5;
            echo "A variável A vale $a.";
            echo "<br>A variável B vale $b.";
            // Abaixo a variável b está referenciada com &
            $a = 3;
            $b = &$a;
            $b += 5;
            echo "<br><br>A variável A vale $a.";
            echo "<br>A variável B vale $b.";

            // Variáveis variantes

            $site = "cursoemvideo";
            $$site = "cursoPHP";
            echo "<br><br>$site";
            echo "<br>$cursoemvideo";
        ?>
    </div>
</body>
</html>
