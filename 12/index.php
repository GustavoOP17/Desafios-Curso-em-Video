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
        <h1>Calculadora de Tempo</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos">
            <input type="submit" value="Calcular">
        </form>

    <?php 
        if(
            isset($_GET["segundos"])
        ):
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            $tempo = (int) $_GET["segundos"];

            $ano = intdiv($tempo, 31622400);
            $resto = $tempo % 31622400;

            $semana = intdiv($resto, 604800);
            $resto = $tempo % 604800;

            $dias = intdiv($resto, 86400);
            $resto = $resto % 86400;

            $horas = intdiv($resto, 3600);
            $resto = $resto % 3600;

            $minuto = intdiv($resto, 60);
            $segundos = $resto % 60;


            echo "Analisando o valor que você digitou, <strong>" . number_format($tempo, 0, ",", ".") . "</strong> segundos equivalem a um total de: </strong>";
            
            echo "<ul><li>$ano anos";
            echo "<li>$semana semanas";
            echo "<li>$dias dias";            
            echo "<li>$horas horas";
            echo "<li>$minuto minutos";
            echo "<li>$segundos segundos";

        ?>
    </section>
    </main>
    <?php endif; ?>
</body>
</html>