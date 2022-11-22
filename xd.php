<?php
    require_once "zmienne.php";
    mysqli_report(MYSQLI_REPORT_STRICT);
    try
    {
        $conn = new mysqli($host, $user ,$password,$name);
    }
    catch(mysqli_sql_exception $e)
    {
        $_SESSION['error'] = $e;
        header('location: index.php');
        exit();
    }


    
    if(isset($_POST['pokaz']))
    {
        $stanowisko = $_POST['lista'];
        $zapytanie = $conn->query( "SELECT `imie`, `nazwisko`FROM `pracownicy` WHERE `stanowisko` = '$stanowisko'");
     
    }
    if(isset($_POST['pensja-max']))
    {
        $zapytanie_max = $conn->query( "SELECT `imie`, `nazwisko`FROM `pracownicy` WHERE pensja=(SELECT MAX(pensja) FROM pracownicy)");
    }
    if(isset($_POST['pensja-min']))
    {
        $zapytanie_min = $conn->query( "SELECT `imie`, `nazwisko`FROM `pracownicy` WHERE pensja=(SELECT MIN(pensja) FROM pracownicy)");
    }
    if(isset($_POST['srednia']))
    {
        $srednia = $conn->query( "SELECT AVG(pensja) FROM `pracownicy`");
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartkówka</title>
</head>
<body>
    <form action="" method="post">
        <select name="lista">
            <option value="Programista">Programista</option>
            <option value="Sieciowiec">Sieciowiec</option>
            <option value="Projektant">Projektant</option>
            <input type="submit" name="pokaz" value="Pokaz">
        </select>
    
        <button name="pensja-max">Największa pensja</button>
        <button name="pensja-min">Najmniejsza pensja</button>
        <button name="srednia">Srednia pensja</button>
        <button name="pokaz-all"></button>

        <div>
            <?php
            if(isset($zapytanie))
            {
               if($zapytanie->num_rows> 0)
               {
                   while($wiersz=$zapytanie->fetch_assoc())
                   {
                       echo $wiersz['imie'] . " " . $wiersz['nazwisko'];
                       echo '<br>';
                   }
               }
            }
            ?>
            <br>
        </div>
        <div>
            <?php
            if(isset($zapytanie_max))
            {
               if($zapytanie_max->num_rows> 0)
               {
                   while($wiersz=$zapytanie_max->fetch_assoc())
                   {
                       echo $wiersz['imie'] . " " . $wiersz['nazwisko'];
                       echo '<br>';
                   }
               }
            }
            ?>
        </div>
        <div>
            <?php
            if(isset($zapytanie_min))
            {
               if($zapytanie_min->num_rows> 0)
               {
                   while($wiersz=$zapytanie_min->fetch_assoc())
                   {
                       echo $wiersz['imie'] . " " . $wiersz['nazwisko'];
                       echo '<br>';
                   }
               }
            }
            ?>
        </div>
        <div>
            <?php
            if(isset($srednia))
            {
               if($srednia->num_rows> 0)
               {
                   while($wiersz=$srednia->fetch_assoc())
                   {
                       echo $wiersz['AVG(pensja)'] ;
                       echo '<br>';
                   }
               }
            }
            ?>
        </div>
    </form>
</body>
</html>
