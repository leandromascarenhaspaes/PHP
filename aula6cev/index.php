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
            // Digitar no navegador a url abaixo, por exemplo
            //http://localhost/aulaphp/index.php?p=500
            $preco = $_GET["p"];
            echo "O preço do produto é R$ $preco";
            // $preco = $preco + ($preco*0.1);
            $preco += ($preco*0.1);
            echo "<br>E o novo preço com 10% de aumento é R$". number_format($preco, 2, ",", ".");;
            $preco -= ($preco*0.1);
            echo "<br>E o novo preço com 10% de desconto após o aumento é R$". number_format($preco, 2, ",", ".");
        ?>
    </div>
</body>
</html>
