<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>
<form action="" method="POST">
    <div>
        <input type="number" name="liczba1" placeholder="Podaj a">
    </div>
    <div>
        <input type="number" name="liczba2" placeholder="Podaj b">
    </div>
    <div>
        <div>
            <input type="radio" name="opcja" value="kwadrat">Kwadrat
        </div>
        <div>
            <input type="radio" name="opcja" value="prostokat">Prostokąt
        </div>
    </div>
        <input type="submit" value="Sprawdź">
    </form>
    <?php
        if(isset($_POST['opcja']) && $_POST['opcja']=="kwadrat")
        {
           $l1 = $_POST['liczba1'];
            $wynik = pow($l1,2);
            echo "Pole kwadratu wynosi: $wynik";
        }
        else if(isset($_POST['opcja']) && $_POST['opcja']=="prostokat")
        {
            $l1 = $_POST['liczba1'];
            $l2 = $_POST['liczba2'];
            $wynik = $l1*$l2;
            echo "Pole prostokąta wynosi: $wynik";
        }
    ?>
</body>
</html>
