<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
  </head>
  <body>
    <div>
      <?php
        $a = $_GET["a"];
        $b = &$a;
        $b += 5;
        echo "$a $b";
      ?>
    </div>
  </body>
</html>
 