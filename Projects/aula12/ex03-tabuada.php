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
            do {
                echo "$num x $cont = ".($num * $cont)."<br/>";
                $cont ++;
            } while ($cont <= 10);
        } else {
            echo "Número informado está fora dos padrões!";
        }
      ?>
      <br/><br/>
      <a class="botao" href="ex03.html">Voltar</a>
    </div>
  </body>
</html>
 