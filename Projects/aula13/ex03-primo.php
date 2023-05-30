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
        echo "Valores múltiplos: ";
        for ($i = 1; $i <= floor($num/2); $i ++) {
            if ($num % $i == 0) {
                echo "$i ";
                $cont ++;
            }
        }
        echo "$num";
        echo "<br/><br/>Total de múltiplos: $cont";
        if ($cont == 2) {
            echo "<br/><br/>$num <span class='foco'>é primo!<span>";
        } else {
            echo "<br/><br/>$num <span class='foco'>não é primo!<span>";
        }
      ?>
      <br/><br/>
      <a class="botao" href="ex03.html">Voltar</a>
    </div>
  </body>
</html>
 