<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artur Klatka 4i</title>
</head>
<body>
    <!-- Grupa A -->
    <?php
        $x = 1;
        $y = 10;
        $wynik = 0;
        for($i = $x; $i <=$y; $i++)
        {
            if($i%2==0)
            {
                $wynik +=$i;
            }
        }
        
        echo "$wynik";
    ?>
</body>
</html>
