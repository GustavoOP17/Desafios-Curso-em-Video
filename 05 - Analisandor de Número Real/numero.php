<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real </h1>
        <?php
            $n = $_GET["n"] ?? 0;
            
            $int = (int) $n;
            $fra = $n - $int;


// caso tiver
            if ($fra != 0) {
                echo "<p>Analisando o número <strong>" . number_format($n, 3, ",", ".") . "</strong> informado pelo usuario:</p>";
                echo "<ul><li> A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") . "</strong></li>";
                echo "<li> A parte fracionaria do número é <strong>" . number_format($fra, 3, ",", ".") . "</strong></li>";
            } else {
// caso nn tiver 
                echo "<p>Analisando o número <strong>" . number_format($int, 0, ",", ".") . "</strong> informado pelo usuario:</p>";
                echo "<ul><li> A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") . "</strong></li>";
                echo "<li> A parte fracionaria do número <strong>não existe, por ser um número inteiro</strong></li>";
            }
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main> 
</body>
</html>