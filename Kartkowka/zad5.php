<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5</title>
</head>
<body>
    <?php
        $tab = [];
        for($i=0;$i<=100;$i++)
        {
            $tab[$i] = rand(100,999);
        }
        $x = max($tab);
        for($i=0;$i<=100;$i++)
        {
            if($tab[$i]==$x)
            {
                echo "Najwieksza liczba $x znajduje sie na $i pozycji <br>";
            }
            
        }
    ?>
</body>
</html>
