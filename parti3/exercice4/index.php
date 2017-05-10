<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 4 Partie 3</title>
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
        <h1>Exercice 4 Partie 3</h1>
        <h2>Créer une variable et l'initialiser à 1.
            Tant que cette variable n'atteint pas 10, il faut :<br>
            - l'afficher <br>
            - l'incrementer de la moitié de sa valeur
        </h2>
        <?php
        //Création de la variable et je l'es initialiser à 1
        $firstNumber = 1;
        //Tant que la variable n'est pas atteint 10
        while ($firstNumber != 10) {
            //Il le divise par 2
            $result = $firstNumber / 2;
            //Affiche le résultat
            echo $result;
            echo '</br>';
            $firstNumber++;
        }
        ?>
    </body>
</html>
