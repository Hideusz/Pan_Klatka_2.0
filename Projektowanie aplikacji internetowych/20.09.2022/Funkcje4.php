<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje 4</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="liczba1" placeholder="Podaj liczbe">
        <input type="number" name="liczba2" placeholder="Podaj liczbe">
        <input type="text" name="znak" placeholder="Podaj znak">
        <input type="submit" value="Oblicz">
    </form>
    <?php
        function dodawanie($a, $b)
        {
            $wynik = $a + $b;
            echo "$wynik";
        }
        function odejmowanie($a, $b)
        {
            $wynik = $a - $b;
            echo "$wynik";
        }
        function mnozenie($a, $b)
        {
            $wynik = $a * $b;
            echo "$wynik";
        }
        function dzielenie($a, $b)
        {
            $wynik = $a / $b;
            echo "$wynik";
        }

        if(isset($_POST['liczba1']))
        {
            $l1 = $_POST['liczba1'];
            $l2 = $_POST['liczba2'];
            $z = $_POST['znak'];
            if($z == '+')
            {
                dodawanie($l1,$l2);
            }
            else if($z == '-')
            {
                odejmowanie($l1,$l2);
            }
            else if($z == "*")
            {
                mnozenie($l1,$l2);
            }
            else if($z == "/")
            {
                dzielenie($l1,$l2);
            }
            else
            {
                echo "Zły znak";
            }
        }
    ?>
</body>
</html>