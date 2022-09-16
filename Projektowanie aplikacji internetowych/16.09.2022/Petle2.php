<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle 2</title>
</head>
<body>
<form action="Petle2.php" method="post">
<input name="pole" type="number" />
<input name="pole2" type="number" />
<input type="submit" />

</form>
    <?php
        $x = @$_POST['pole'];
        $y = @$_POST['pole2'];
        for($i = $x; $i <= $y; $i++)
        {
            if($i % 5 == 0) echo $i . ', ';
        }
    ?>
</body>
</html>