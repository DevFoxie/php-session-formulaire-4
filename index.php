<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CUSTOM CSS !-->
    <link rel="stylesheet" href="./css/custom.css">

    <title>Page 1</title>

</head>

<body>

    <div class="content">
        <div class="content__container">
            <p class="content__container__text">
                Hi!
            </p>

            <ul class="content__container__list">
                <li class="content__container__list__item">Les</li>
                <li class="content__container__list__item">Dates</li>
                <li class="content__container__list__item">PHP</li>
                <li class="content__container__list__item">:)</li>
            </ul>
        </div>
    </div>

    <div class="calendar">

        <a href="calendrier.php">MON CALENDRIER</a>
        
    </div>

    <div class="php">



        <?php
        // Exercice 1 :
        echo "Date du jour (dd-mm-yyyy) : " . date("d/m/Y") . "<BR>";

        // Exercice 2 :
        echo "Date du jour (dd-mm-yy) : " . date("d/m/y") . "<BR> ";

        // Exercice 3 : 
        setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
        $maintenant = new DateTime();
        echo "Date du jour en lettres (FR) :" . $maintenant->format('l d F Y ') . "<br>";

        // Exercice 4 : 
        echo 'Timestamp actuel : ' . time() . '<br>';
        $t1 = mktime(15, 00, 0, 8, 2, 2016);
        echo 'Timestamp du mardi 2 août 2016 à 15h00 : ' . time() . '<br>';

        // Exercice 5 : 
        $date_to_compare = new DateTime("2016-05-16");
        $compare = $maintenant->diff($date_to_compare);
        echo $compare->days . " jours" . " sépare la date d'aujourd'hui et le 16 mai 2016.<br>";

        // Exercice 6 : 
        function daysInMonth(int $month, int $year = null): int
        {
            $date = sprintf(
                '%s-%02s-01',
                is_null($year) ? (new \DateTime())->format('Y') : $year,
                $month
            );

            return (int) (new DateTime($date))->format('t');
        }
        echo "Le mois de février de l'année 2016 est composé de : " . daysInMonth(2, 2016) . " jours.<br>";

        // Exercice 7 : 
        $date_plus_20days = date('l d F Y ', strtotime('+20 day'));
        echo "Voici la date du jour +20 jours : " . $date_plus_20days . "<br>";

        // Exercice 8 :
        $date_minus_20days = date('l d F Y ', strtotime('-20 day'));
        echo "Voici la date du jour -20 jours : " . $date_minus_20days . "<br>";
        ?>
    </div>

    <div class="title">
        <h1>PHP TRAINING</h1>
    </div>

</body>

</html>