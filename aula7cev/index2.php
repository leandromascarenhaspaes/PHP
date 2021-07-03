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
            // Digitar a seguinte url no navegador
            // http://localhost/aulaphp/index.php?n1=5&n2=8
           $nota1 = $_GET["n1"]; 
           $nota2 = $_GET["n2"];
           $m = ($nota1+$nota2)/2;
           echo "A média entre $nota1 e $nota2 é $m.<br> ";
           // $sit = $m<7?"Reprovado":"Aprovado";
           echo "Aluno ". ($m<7?"Reprovado":"Aprovado");
        ?>
    </div>
</body>
</html>
