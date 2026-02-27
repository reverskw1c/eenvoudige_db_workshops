<!doctype html>
<?php
    /*
     * Author: R. Evers
     * Date: 6-2-26
     * Homepage van workshop week 1.
     */
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <?php
            echo "<h1>Hello World</h1>";
        ?>
        <h2>
            Koptekst
        </h2>


        <?php
            echo "<p>Hello World</p>";

            echo "Hello World";
            echo "Hello World<br>";
        ?>

        <?php
            /*
             *
             *
            */
            $firstName = "Piet"; //String
            $lastName = "Evers";
            $age = 55; //integer
            $isStudent = false; //Boolean

            //Mijn naam is voornaam + achternaam en mijn leeftijd is leeftijd.
            echo "<p>Mijn naam is $firstName $lastName en mijn leeftijd is $age</p>";

            //variabel maakt met jouw leeftijd over 10 jaar.
            $ageOver10 = $age + 10;

            //echo de tekst Ik ben over 10 jaar .. oud.
            echo "$firstName is over 10 jaar <strong>$ageOver10 jaar</strong> oud.<br>";

        ?>

    </body>
</html>

