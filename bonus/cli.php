<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-badword-bonus</title>
  </head>
  <body>

    <!-- bonus da terminale  -->

    <?php

      $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
      echo "TESTO BASE: " . $text . "\r\n\r\n";

      $textLength = strlen($text);
      echo "LUNGHEZZA TESTO BASE: " . $textLength . " caratteri" . "\r\n\r\n";

      // var_dump($argv); // per capire in che posizione si trova la badword scelta
      $badword = $argv[1];
      echo "BADWORD SCELTA: " . $badword . "\r\n\r\n";

      $badwordLength = strlen($badword);
      echo "LUNGHEZZA BADWORD SCELTA: " . $badwordLength . " caratteri" . "\r\n\r\n";

      $textFiltr = str_replace($badword, '***', $text);
      echo "TESTO FILTRATO: " . $textFiltr . "\r\n\r\n";

      $textFiltrLength = strlen($textFiltr);
      echo "LUNGHEZZA TESTO FILTRATO: " . $textFiltrLength . " caratteri" . "\r\n\r\n";
     ?>

  </body>
</html>
