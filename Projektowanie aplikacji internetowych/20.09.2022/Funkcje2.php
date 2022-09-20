<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje 2</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="liczba1" placeholder="podaj liczbe">
        <input type="number" name="liczba2" placeholder="podaj liczbe">
        <input type="submit" value="Oblicz">
    </form>
    <?php
        function wynik($a, $b)
        {
            $wynik = $a + $b;
            $wynik = pow($wynik,3);
            echo $wynik;
        }

        if(isset($_POST['liczba1']))
        {
            $l1 = $_POST['liczba1'];
            $l2 = $_POST['liczba2'];

            echo "Suma liczb $l1 i $l2 do trzeciej potegi wynosi: ";
            wynik($l1, $l2);
        }

    ?>
</body>
</html>
