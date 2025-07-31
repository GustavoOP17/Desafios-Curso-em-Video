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
            <label for="v1">1° Valor:</label>
            <input type="number" name="v1" id="v1" step="0.1" required>

            <label for="p1">1° peso:</label>
            <input type="number" name="p1" id="p1" step="0.1" required>

            <label for="v2">2° valor</label>
            <input type="number" name="v2" id="v2" step="0.1" required>    

            <label for="p2">2° peso</label>
            <input type="number" name="p2" id="p2" step="0.1" required>

            <label for="opcao">Quer ver a media simples? digite 1, ponderada? digite 2, ambas? digite 3 </label>
            <input type="number" name="opcao" id="opcao" min="1" max="3" required> 

            <input type="submit" value="Calcular medias">
        </form>

        <?php 
            if(
                isset($_GET["v1"]) && 
                isset($_GET["p1"]) && 
                isset($_GET["v2"]) && 
                isset($_GET["p2"]) && 
                in_array((int) $_GET["opcao"], [1, 2, 3])
            ):
        ?>
        <section>
            <h2>Cálculo das Médias</h2>
            <?php
                $opcao = $_GET["opcao"];
                $v1 = $_GET["v1"];
                $p1 = $_GET["p1"];
                $v2 = $_GET["v2"];
                $p2 = $_GET["p2"];

                $mediaSimples = ($v1 + $v2) / 2;
                $mediaPonderada = (($v1 * $p1) + ($v2 * $p2)) / ($p1 + $p2);
                
                switch ($opcao) {
                    case '1':
                        echo "<p>A média simples é <strong>" . number_format($mediaSimples, 1, ",", ".") . "</strong></p>";
                        break;

                    case '2':
                        echo "<p>A média ponderada é <strong>" . number_format($mediaPonderada, 1, ",", ".") . "</strong></p>";
                        break;

                    case '3':
                        echo "<p>A média simples é <strong>" . number_format($mediaSimples, 1, ",", ".") . "</strong></p>";
                        echo "<p>A média ponderada é <strong>" . number_format($mediaPonderada, 1, ",", ".") . "</strong></p>";
                        break;
                }
            ?>
        </section>
        <?php endif; ?>
    </main>
</body>
</html>




