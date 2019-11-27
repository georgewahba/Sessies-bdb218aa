<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <!-- maak hier de opdracht -->
        <?php
        session_start();
        if (isset($_POST['keuze'])) {
          $session_name ='mand';
          $session_value = $_POST['keuze'];
          setcookie($session_name, $session_value, time()+(86400 * 30), "/");
        }
        if (isset($_session['mand'])) {
          echo "gekozen item: ". $_session['mand'] ;
        }
        else {
          echo "  <form action=' ' method='post'>
                  keuze : <input type='text' name='keuze'/>
                  <input type='submit' value='submit'/>
                  </form>";
        }
         ?>


    </body>
</html>
