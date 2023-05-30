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
        $letra = "C";
        $cod = ord("C");
        echo "<p>A letra $letra corresponde ao código $cod</p>";

        $letra = "c";
        $cod = ord("c");
        echo "<p>A letra $letra corresponde ao código $cod</p>";
      ?>
    </div>
  </body>
</html>
 