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
        $num = isset($_GET["num"]) ? $_GET["num"] : 0;
        $cont = 1;
        if ($num > 0) {
            echo "Mostrando a Tabuada do $num<br/><br/>";
            for ($i = 1; $i <= 10; $i ++) {
              echo "$num x $i = ".($num * $i)."<br/>";
                $cont ++;
            }
        } else {
            echo "Número informado está fora dos padrões!";
        }
      ?>
      <br/><br/>
      <a class="botao" href="ex02.php">Voltar</a>
    </div>
  </body>
</html>
 