<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
            <label for="salario">Seu salario:</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?= $_GET['salario'] ?? 0 ?>">
            <p>Considerando p salário mínimo de R$ 1518,00</p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php if(isset($_GET['salario'])): ?>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $salario = (float) $_GET["salario"];
            $salario_m = 1518.00;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $salarioFormatado = numfmt_format_currency($padrao, $salario, "BRL");
            $salarioMinFormatado = numfmt_format_currency($padrao, $salario, "BRL");
            $qtdSalario = floor($salario / $salario_m);
            $salarioSobra = number_format(($salario % $salario_m) + ($salario - (int) $salario), 2, ",", ".");
            
            echo "Quem recebe $salarioFormatado ganha $qtdSalario salarios minimos + $salarioSobra";        
        ?>
    </section>
    <?php endif; ?>
</body>
</html>