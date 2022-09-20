<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje 3</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="liczba1" placeholder="podaj liczbe">
        <input type="number" name="liczba2" placeholder="podaj liczbe">
        <input type="number" name="liczba3" placeholder="podaj liczbe">
        <input type="submit" value="Oblicz">
    </form>
    <?php
        function liczby_pitagorejskie($a, $b, $c)
        {
            if(pow($a,2)+pow($b,2)==pow($c,2))
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }

        if(isset($_POST['liczba1']))
        {
            $l1 = $_POST['liczba1'];
            $l2 = $_POST['liczba2'];
            $l3 = $_POST['liczba3'];
            liczby_pitagorejskie($l1, $l2, $l3);
        }
    ?>
</body>
</html>
