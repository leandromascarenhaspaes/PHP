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
        <form method="get" action="02tabuada.php">
            <select name="num" min="1">
                <?php
                    for ($c=1;$c<=10;$c++) {
                        echo "<option>$c</option>";
                    }
                ?>
                <option value=""></option>
            </select>
            <br>
            <input type="submit" value="Tabuada"/>
        </form>
    </div>
</body>
</html>
