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
        function soma() {
            $args = func_get_args();
            $tam = func_num_args();
            $soma = 0;

            for ($i = 0; $i < $tam; $i++) {
                $soma += $args[$i];
            }

            return $soma;
        }
        echo "<p>A soma dos números é ".soma(1, 2, 3, 4, 5)."</p>";
      ?>
    </div>
  </body>
</html>
 