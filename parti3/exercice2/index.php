<html>
    <head>
        <meta charset=UTF-8"/>
        <title>Exercice 2 Partie 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <input type="button" value="Exercice 1" onClick="javascript:document.location.href = 'http://partie3/exercice1/'" />
            <input type="button" value="Exercice 2" onClick="javascript:document.location.href = 'http://partie3/exercice2/'" />
            <input type="button" value="Exercice 3" onClick="javascript:document.location.href = 'http://partie3/exercice3/'" />
            <input type="button" value="Exercice 4" onClick="javascript:document.location.href = 'http://partie3/exercice4/'" />
            <input type="button" value="Exercice 5" onClick="javascript:document.location.href = 'http://partie3/exercice5/'" />
            <input type="button" value="Exercice 6" onClick="javascript:document.location.href = 'http://partie3/exercice6/'" />
            <input type="button" value="Exercice 7" onClick="javascript:document.location.href = 'http://partie3/exercice7/'" />
            <input type="button" value="Exercice 8" onClick="javascript:document.location.href = 'http://partie3/exercice8/'" />
        </header>
        <h1>Exercice 2  Partie 3</h1>

        <h2>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
            Tant que la première variable n'est pas supérieur à 20 :<br>
            -multiplier la première variable avec la deuxième<br>
            -afficher le résultat<br>
            -incrementer la première variable
        </h2>
        <?php
        //Création de 2 variables qui sont initialiser à et la second à 50
        $firstNumber = 0;
        $secondNumber = 50;
        while ($firstNumber != 20) {
            //Variable 1 multiplié par la 2
            $result = $firstNumber * $secondNumber;
            //Sa renvoie le résultats
            echo $result;
            echo '</br>';
            // $nombre_de_lignes = $nombre_de_lignes + 1
            $firstNumber++;
        }
        ?>
    </body>
</html>
