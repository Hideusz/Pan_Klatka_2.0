<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>
    <?php
        $a = 0;
        for($i=1; $i<=100;$i++)
        {
            $x = rand(1,9).PHP_EOL;
            file_put_contents("dane.txt", $x, FILE_APPEND | LOCK_EX);
        }
        $tab = explode(PHP_EOL, file_get_contents("dane.txt"));
            foreach($tab as $t)
            {
                if($t==2)
                {
                    $a++;
                }
                // echo "$t<br>";
            }
            echo "Liczba 2 wystąpiła $a razy";
        unlink("dane.txt")
    ?>
</body>
</html>
