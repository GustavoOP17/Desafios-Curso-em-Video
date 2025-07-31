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
        <h1>Caixa Eletrônico</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="saque" id="saque" step="0.01">
            <p>*Notas disponiveis: R$100, R$50, R$20 ,R$10 e R$5</p>

            <input type="submit" value="Sacar">
        </form>
        <?php 
            if(
                isset($_GET["saque"])
            ):
        ?>

        <section>
            <h2>Saque de R$ <?php echo $_GET["saque"]; ?> realizado</h2>
            <?php 
                $dinheiro = (float) $_GET["saque"];
                $centavos = (int) round($dinheiro * 100);

                $cem = intdiv($centavos, 10000);
                $resto = $centavos % 10000;
            
                $cinquenta = intdiv($resto, 5000);
                $resto %= 5000;

                $vinte = intdiv($resto, 2000);
                $resto %= 2000;

                $dez = intdiv($resto, 1000);
                $resto %= 1000;

                $cinco = intdiv($resto, 500);
                $resto %= 500;


                echo "<ul>";
                echo "<li>$cem nota(s) de R$100</li>";
                echo "<li>$cinquenta nota(s) de R$50</li>";
                echo "<li>$vinte nota(s) de R$20</li>";
                echo "<li>$dez nota(s) de R$10</li>";
                echo "<li>$cinco nota(s) de R$5</li>";                    
                echo "<li>R$" . number_format($resto / 100, 2, ",", ".") . " não podem ser sacados</li>";
                echo "</ul>";



            ?>
        </section>
    </main>
    <?php endif; ?>
</body>
</html>