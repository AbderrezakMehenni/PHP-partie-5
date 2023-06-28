<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Exercice 1 -->
        <div>
            <?php
                $month=array(
                    'janvier',
                    'février',
                    'mars',
                    'avril',
                    'mai',
                    'juin',
                    'juillet',
                    'août',
                    'septembre',
                    'octobre',
                    'novembre',
                    'décembre'
                );
            ?>
        </div>

    <!-- Exercice 2 -->
        <div>
            <?php
                $month=array(
                    'janvier',
                    'février',
                    'mars',
                    'avril',
                    'mai',
                    'juin',
                    'juillet',
                    'août',
                    'septembre',
                    'octobre',
                    'novembre',
                    'décembre'
                );
                $trois=$month[2];
                echo $trois;
            ?>
        </div>

    <!-- Exercice 3 -->
        <div>
            <?php
                $month=array(
                    'janvier',
                    'février',
                    'mars',
                    'avril',
                    'mai',
                    'juin',
                    'juillet',
                    'aout',
                    'septembre',
                    'octobre',
                    'novembre',
                    'décembre'
                );
                $cinquieme=$month[5];
                echo $cinquieme;
            ?>
        </div>

    <!-- Exercice 4 -->
        <div>
            <?php
                $month=array(
                    'janvier',
                    'février',
                    'mars',
                    'avril',
                    'mai',
                    'juin',
                    'juillet',
                    'aout',
                    'septembre',
                    'octobre',
                    'novembre',
                    'décembre'
                );
                $month = str_replace("aout", "août", $month);
                $aout=$month[7];
                echo $aout;
            ?>
        </div>

    <!-- Exercice 5 -->
        <div>
            <?php
                $departements = array(
                    "02" => "Aisne",
                    "59" => "Nord",
                    "60" => "Oise",
                    "62" => "Pas-de-Calais",
                    "80" => "Somme"
                );
            ?>
        </div>

    <!-- Exercice 6 -->
        <div>
            <?php
                $departements = array(
                    "02" => "Aisne",
                    "59" => "Nord",
                    "60" => "Oise",
                    "62" => "Pas-de-Calais",
                    "80" => "Somme"
                );
                $index=$departements["59"];
                echo $index;
            ?>
        </div>

    <!-- Exercice 7 -->
        <div>
            <?php
                $departements = array(
                    "02" => "Aisne",
                    "59" => "Nord",
                    "60" => "Oise",
                    "62" => "Pas-de-Calais",
                    "80" => "Somme",
                    "51" => "Reims"
                );
            ?>
        </div>

    <!-- Exercice 8 -->
        <div>
            <?php
                $month=array(
                    'janvier',
                    'février',
                    'mars',
                    'avril',
                    'mai',
                    'juin',
                    'juillet',
                    'aout',
                    'septembre',
                    'octobre',
                    'novembre',
                    'décembre'
                );
                foreach($month as $value) {
                    echo $value." ";
                }
            ?>
        </div>

    <!-- Exercice 9 -->
        <div>
            <?php
                $departements = array(
                    "02" => "Aisne",
                    "59" => "Nord",
                    "60" => "Oise",
                    "62" => "Pas-de-Calais",
                    "80" => "Somme"
                );
                print_r($departements);
            ?>
        </div>

    <!-- Exercice 10 -->
        <div>
            <?php
                $departements = array(
                    "02" => "Aisne",
                    "59" => "Nord",
                    "60" => "Oise",
                    "62" => "Pas-de-Calais",
                    "80" => "Somme"
                );
                foreach ($departements as $numero => $nom) {
                    echo "<p>"."Le département ".$nom." a le numéro ".$numero."</p>";
                }
            ?>
        </div>
</body>
</html>