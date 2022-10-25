<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 7</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="waga" placeholder="Podaj wage">
        <input type="number" name="wzrost" placeholder="Podaj wzrost w cm ">
        <input type="submit" value="Oblicz">
    </form>
    <?php
    if(isset($_POST['waga']))
    {
        $waga = $_POST['waga'];
        $wzrost = $_POST['wzrost']/100;
        $bmi = $waga/pow($wzrost,2);
        $bmi = round($bmi,1);
        if($bmi < 18.5)
        {
            echo "Niedowaga";
        }
        else if($bmi >18.5 && $bmi <24.99)
        {
            echo "Prawidłowa";
        }
        else
        {
            echo "Nadwaga";
        }
        echo "<br>$bmi";
    }
    ?>
</body>
</html>
