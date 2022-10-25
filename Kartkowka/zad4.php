<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>
  //Nie wiem czy to dobrze jest
    <?php
        $dni = array(
            'Poniedziałek' => 'Monday '. 'Montag',
            'Wtorek' => 'Wtorek ang '. 'Wtorek niem',
            'Środa' => 'Środa ang '. 'Środa niem',
            'Czwartek' => 'Czwartek ang '. 'Czwartek niem',
            'Piątek' => 'Piątek ang '. 'Piątek niem',
            'Sobota' => 'Sobota ang '. 'Sobota niem',
            'Niedziela' => 'Niedziela ang '. 'Niedziela niem'
        );
        foreach($dni as $klucz => $wynik)
        {
            echo $klucz. " = " .$wynik."<br><br>";
        }
    ?>
</body>
</html>
