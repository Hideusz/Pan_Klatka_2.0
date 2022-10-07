<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalogi 4</title>
</head>
<body>
    <form action="" method="POST">
        <textarea name="Opinie"></textarea>
        <input type="submit" value="Zapisz opinie">
    </form>
    <?php
        if(isset($_POST['Opinie']))
        {
            $opinie = $_POST['Opinie'].PHP_EOL;
            $plik = './Zadanie katalogi/opinie.txt';
            file_put_contents($plik, $opinie, FILE_APPEND | LOCK_EX);
            $tab = explode(PHP_EOL, file_get_contents($plik));
            foreach($tab as $t)
            {
                echo "<p>$t</p>";
            }
        }
    ?>
</body>
</html>