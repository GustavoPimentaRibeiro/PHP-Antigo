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
        $a = 3;
        $b = "3";
        $r = ($a == $b) ? "SIM" : "NÃO";
        echo "O resultado é $r";
        $r = ($a === $b) ? "SIM" : "NÃO";
        echo "<br/>O resultado é $r";
      ?>
    </div>
  </body>
</html>
 