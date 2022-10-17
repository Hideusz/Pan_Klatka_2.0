<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalogi 2</title>
</head>
<body>
    <?php
        $plik = './Zadanie katalogi/katalogi2.txt'; //Tutaj trzeba podać swoją ścieżke do pliku
        echo file_get_contents($plik);
    ?>
</body>
</html>