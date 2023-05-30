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
        $num = isset($_GET["num"]) ? $_GET["num"] : 1;
        $total = 1;
        $cont = 1;
        do {
          $total *= $cont;
          $cont ++;
        } while ($cont <= $num);
        echo "<span class='foco'>$num!</span> = <span class='foco'>$total</span>";
      ?>
      <br/><br/>
      <a class="botao" href="ex02.html">Voltar</a>
    </div>
  </body>
</html>
 