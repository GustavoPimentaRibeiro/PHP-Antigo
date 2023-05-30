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
        $x[0] = 4;
        $x[1] = 3;
        $x[2] = 8;
        print_r($x);
        $y = array(3, 7, 6, 2, 1, 9);
        echo "<br/>";
        print_r($y);
        echo "<br/>";
        var_dump($y);
        echo "<br/>";
        var_export($y);
      ?>
    </div>
  </body>
</html>
 