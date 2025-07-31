<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['d1'] ?? 0;
        $divisor = $_GET['2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo: </label>
            <input type="number" name="d1" id="d1" min="1" value="<?=$dividendo?>">

            <label for="divisor">Divisor: </label>
            <input type="number" name="d2" id="d2" min="1" value="<?=$divisor?>">

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>    
        <h2>Estrutura da Divisão</h2>
        <?php
            $dividendo = $_GET["de"];
            $divisor = $_GET["di"];
            
            if ($divisor == 0) {
                echo "<p><strong>Erro:</strong> Divisor não pode ser zero!</p>";
            } else {
                
                    $quociente = intdiv($dividendo, $divisor);
                    $resto = $dividendo % $divisor;

                    echo "<ul>";
                    echo "<ul><li>O dividendo é $dividendo.</li>";
                    echo "<li>O divisor é $divisor.</li>";
                    echo "<li>O resto é $resto.</li>";
                    echo "<li>O quociente é $quociente.</li>";
                    echo "</ul>";
                
            }
        ?>
    </section>
</body>
</html>