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
          echo "<p>A soma entre $num1 e $num2 é ".($num1 + $num2)."</p>";
        }

        soma(3, 4);
        soma(8, 2);
        $x = 9;
        $y = 15;
        soma($x, $y);
      ?>
    </div>
  </body>
</html>
 