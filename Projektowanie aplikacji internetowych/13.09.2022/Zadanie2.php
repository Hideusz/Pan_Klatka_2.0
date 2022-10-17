<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie_2</title>
</head>
<body>

    <?php
        const CENA = 7;
        define('SPALANIE', 8);

        $trasa = 400;

        $wynik = ($trasa / 100) * SPALANIE * CENA;

        echo "WYNIK = $wynik";
    ?>
    
</body>
</html>:
