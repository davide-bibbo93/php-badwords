<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>php-badword</title>
  </head>
  <body>

    <?php

      // Salvo il testo in una variabile
      $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

      // salvo la lunghezza del testo base
      $textLength = strlen($text);

      // seleziono la parola da filtrare
      $badword = $_GET['badword'];

      // salvo la lunghezza della badword da filtrare
      $badwordLength = strlen($badword);

      // salvo il testo filtrato (parola da filtrare, con cosa filtro, dove)
      $textFiltr = str_replace($badword, '***', $text);

      // salvo la lunghezza del testo filtrato
      $textFiltrLength = strlen($textFiltr);

    ?>
    <br>
    <br>

    <div class="container">

      <div class="text-container">
        <div>
          <h2>Testo originale</h2>
          <span> <?php echo $text; ?></span>
        </div>
        <div>
          <h2>La sua lunghezza in caratteri</h2>
          <p><?php echo $textLength; ?></p>
        </div>
      </div>

      <div class="bad-container">
        <div>
          <h2>La badword scelta</h2>
          <p> <?php echo $badword; ?></p>
        </div>
        <div>
          <h2>La lunghezza della badword in caratteri</h2>
          <p> <?php echo $badwordLength; ?></p>
        </div>
      </div>

      <div class="text-filtr-container">
        <div>
          <h2>Testo filtrato</h2>
          <span><?php echo $textFiltr; ?></span>
        </div>
        <div>
          <h2>La sua lunghezza in caratteri</h2>
          <p> <?php echo $textFiltrLength; ?></p>
        </div>
      </div>
    </div>

  </body>
</html>
