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
            <label for="numero">Número:</label>
            <input type="number" name="num" id="num" value="?php $_GET["num"] ?? 0?>
            <input type="submit" value="Calcular Raízes">
        </form>

        <?php if(isset($_GET["num"])):?>
        <section>
            <h2>Resultado final</h2>
            <?php 
                $raiz = $_GET["num"];
                $quadrada = sqrt($raiz);
                $cubica = $raiz ** (1/3);

                echo "Analisando o <strong>número $raiz</strong>, temos:";
                echo "<ul><li>A sua raiz quadrada é $quadrada";
                echo "<li>A sua raiz cúbica é $cubica";
            ?>
        </section>
        <?php endif; ?>
    </main>
</body>
</html>