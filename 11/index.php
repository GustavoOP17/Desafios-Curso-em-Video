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
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0,01" required>

            <label for="reajustei">Qual será o percentual de reajuste? (<output name="output">50</output>%)</label>
            <input type="range" name="reajustei" id="reajustei" min="0" max="100" value="50" oninput="output.value = reajustei.value">

            <input type="submit" value="Calcular reajuste">


        </form>
        <?php
            if(
                isset($_GET["preco"])
            ):
        ?>
        <section>
            <h2>Resultado do reajuste</h2>
            <?php 
                $precoOriginal = $_GET["preco"];
                $porcentagemReajuste = $_GET["reajustei"];
                $precoFinal = $precoOriginal + ($precoOriginal * $porcentagemReajuste / 100);

                echo "O produto custava R$" . number_format($precoOriginal, 2, ",", ".") . ", com <strong>$porcentagemReajuste% de aumento</strong> vai passar a custar R$" . number_format($precoFinal, 2, ",", ".") . " a partir de agora.";
            ?>
        </section>
        <?php endif; ?>
    </main>
</body>
</html>