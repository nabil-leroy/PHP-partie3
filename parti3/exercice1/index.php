<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 1 Partie 3</title>
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
        <h1>Exercice 1  Partie 3</h1>
        <h2>Créer une variable et l'initialiser à 0.
            Tant que cette variable n'atteint pas 10, il faut :<br>
            - l'afficher<br>
            - l'incrementer
        </h2>
        <p>
            <?php
            //Variable qui est initialiser à 0
            $nombre_de_lignes = 0;
            //variable à pour maximum 10 lignes
            while ($nombre_de_lignes <= 10) {
                echo 'Exercice1 </br>';
                $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
            }
            ?>
        </p>
    </body>
</html>
