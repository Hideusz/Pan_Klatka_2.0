<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupa B</title>
</head>
<body>
    <!-- Grupa B -->
    <?php
        function obliczanie($tab,$x)
        {
            for($i = 0; $i <=20; $i++)
            {
                $tab[$i] = rand(1,10);
            }
            for($i = 0; $i <=20; $i++)
            {
                echo $tab[$i] . ' ';
                if($tab[$i] == 3)
                {
                    $x++;
                }
            }
            echo '<div>Liczba 3 wystąpiła ' . $x . ' razy</div>';
        }
        $x = 0;
        $tab = [];
        obliczanie($tab,$x);
    ?>
</body>
</html>
