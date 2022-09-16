<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle 1</title>
</head>
<body>
    <?php
        for($i = 0; $i < 5; $i++)
        {
            echo '*';
            for($j = 1; $j < 10; $j++)
            {
                if($i > 0 && $i < 5-1)
                {
                    echo '&nbsp' . ' ';
                    if($j == 8) echo '*';
                }
                else
                {
                    echo '*';
                }
            }
            echo '<br>';
        }
    ?>
</body>
</html>
