<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle 4</title>
</head>
<body>
<form action="" method="post">
    <input name="x" type="number">
    <input type="submit">
</form>
    <?php
        if(isset($_POST['x']))
        {
            $x = $_POST['x'];
            $silnia = 1;
            for($i = 1; $i <= $x; $i++)
            {
                $silnia = $silnia * $i;
            }
            echo "<div>Silnia z liczby $x wynosi: $silnia</div>";
        }
    ?>
</body>
</html>
