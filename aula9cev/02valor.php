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
            $nota1 = isset($_GET["n1"])?$_GET["n1"]:0;
            $nota2 = isset($_GET["n2"])?$_GET["n2"]:0;

            echo "As notas inseridas foram $nota1 e $nota2.<br>";
            $m = ($nota1+$nota2)/2;
            if ($m<0 || $m>10) {
                $status = "Nota inválida";
            }else {
                if($m < 5) {
                    $status = "Aluno Reprovado!";
                }
                elseif ($m>=5 && $m<7) {
                    $status = "Aluno em Recuperação!";
                }
                else {
                    $status = "Aluno Aprovado!";
                }
            }

            echo "A média deste aluno é $m. $status";
        ?>
        <br><br>
        <a href="02exercicio.html">Voltar</a>
    </div>
</body>
</html>
