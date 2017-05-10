<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 5 Partie 3</title>
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
        <h1>Exercice 5 Partie 3</h1>
        <h2>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.
        </h2>
        <?php
        $firstNumber = 1;
  
            $firstNumber ++;
            //En allant de  à 15 avec un pas de 1
            for ($firstNumber = 1; $firstNumber <= 15; $firstNumber++) {
                //Un message "on y arrive presque" s'affiche
                echo 'On y arrive presque <br/>' . $firstNumber . '<br />';
            }
        ?>
    </body>
</html>
