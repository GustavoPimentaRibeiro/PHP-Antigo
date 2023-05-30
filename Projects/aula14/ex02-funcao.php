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
        function soma($num1, $num2) {
          return $num1 + $num2;
        }
        echo "<p>O resultado é ".soma(3, 4)."</p>";
        echo "<p>O resultado é ".soma(8, 2)."</p>";
        $x = 9;
        $y = 15;
        echo "<p>O resultado é ".soma($x, $y)."</p>";
      ?>
    </div>
  </body>
</html>
 