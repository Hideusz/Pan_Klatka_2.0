<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle 3</title>
</head>
<body>
<form action="" method="post">
    <input name="a" type="number">
    <input name="b" type="number">
    <input type="submit">
</form>
    <?php
        $a = @$_POST['a'];
        $b = @$_POST['b'];
        while($a != $b)
            {
                if($a > $b)
                {
                    $a = $a - $b;
                }
                else
                {
                    $b = $b - $a;
                }
            }
            echo "<div>Nwd wynosi: $a</div>" ;
    ?>
</body>
</html>