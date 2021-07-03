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
            $d = isset($_GET["uf"])?$_GET["uf"]:0;
            switch ($d) {
                case 1:
                    echo "Este estado fica na Região Norte";
                    break;
                case 2:
                    echo "Este estado fica na Região Nordeste";
                    break;
                case 3:
                    echo "Este estado fica na Região Centro-Oeste";
                    break;
                case 4:
                    echo "Este estado fica na Região Sudeste";
                    break;
                case 5:
                    echo "Este estado fica na Região Sul";
                    break;
                case 6:

                case 7:
                case 8:
                    echo "Descanse, pequeno gafanhoto!";
                    break;
                default:
                    echo "Selecione uma região!";
            }
        ?>
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>
