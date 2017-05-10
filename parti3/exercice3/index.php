<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 3 Partie 3</title>
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
        <h1>Exercice 3 Partie 3</h1>
        <h2>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
            Tant que la première variable n'est pas inférieur ou égale à 10 :<br>
            - multiplier la première variable avec la deuxième<br>
            - afficher le résultat<br>
            - décrémenter la première variable
        </h2>
        <?php
        //Création de 2 variables qui sont initialiser. La premiére à 100 et la deuxiéme 50.
        $firstNumber = 100;
        $secondNumber = 50;
        //tant que la premiére variable n'est pas inférieur ou égale à 10
        while ($firstNumber != 10) {
            // multiplication de la premiére variable avec la deuxième.
            $result = $firstNumber * $secondNumber;
            //Affiche le résultats
            echo $result;
            echo '</br>';
            //Décremente la variable
            $firstNumber--;
        }
        ?>
    </body>
</html>
