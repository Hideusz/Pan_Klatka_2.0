<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice 1</title>
</head>
<body>
    <?php
    $tab = array(6,4,10,20,1,54,3,8,99,45);
    sort($tab);
    for($i = 0; $i <10; $i++)
    {
        echo $tab[$i] . ', ';
    }
    ?>
</body>
</html>
