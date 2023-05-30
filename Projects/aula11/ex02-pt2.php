<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
  </head>
  <body>
    <div>
      <form method="get" action="ex02-pt2.php">
        <?php
          $i = 1;
          while ($i <= 5) {
            $v = "num".$i;
            $url = "v".$i;
            $$v = isset($_GET[$url]) ? $_GET[$url] : 0; // Variável de variável (cria variáveis como num1, num2, num3, ...)
            $i ++;
          }

          $i = 1;
          while ($i <= 5) {
            $v = "num".$i;
            echo "Valor $i : ".$$v."<br/>";
            $i ++;
          }
        ?>
      </form>
    </div>
  </body>
</html>
 