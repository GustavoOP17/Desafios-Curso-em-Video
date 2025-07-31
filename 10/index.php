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
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
            <label for="nasceu">Em que ano você nasceu?</label>
            <input type="number" name="nasceu" id="nasceu" value="<?= $_GET["nasceu"] ?? 2000?>" required>

            <label for="ano">Quer saber sua idade em que ano? (estamos em <?= date("Y") ?>)</label>
            <input type="number" name="ano" id="ano" value="<?= $_GET["ano"] ?? date("Y") ?>" required>

            <input type="submit" value="Qual será a sua idade?">
        </form>

        <?php 
        if (isset($_GET["nasceu"]) && isset($_GET["ano"])):
            $nasceu = (int) $_GET["nasceu"];
            $ano = (int) $_GET["ano"];
            $idade = $ano - $nasceu;
        ?>
            <section>
                <h2>Resultado</h2>
                <p>Quem nasceu em <?= $nasceu ?> vai ter <strong><?= $idade ?></strong> anos em <?= $ano ?>.</p>
            </section>
        <?php endif; ?>
    </main>
</body>
</html>