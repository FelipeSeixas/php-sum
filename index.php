<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
        <h1>Exercício 6 - Calculadora</h1>
</header>

    <?php 
         $valor1 = $_GET['v1'] ?? 0;
         $valor2 = $_GET['v2'] ?? 0;

    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="V1">Informe o valor 1:</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">

            <label for="V2">Informe o valor 2:</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da soma</h2>
        
        <?php 
            $soma = $valor1 + $valor2;
            print "<p>$valor1 + $valor2 = $soma</p> ";
        ?>
    </section>
        
</body>
</html>