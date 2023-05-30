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
            $ini = isset($_GET["ini"]) ? $_GET["ini"] : 0;
            $fin = isset($_GET["fin"]) ? $_GET["fin"] : 1;
            $inc = isset($_GET["inc"]) ? $_GET["inc"] : 1;
            if ($ini >= $fin) {
                while ($ini >= $fin) {
                    echo "$ini<br/>";
                    $ini -= $inc;
                }
            }else {
                while ($ini <= $fin) {
                    echo "$ini<br/>";
                    $ini += $inc;
                }
            }
        ?>
        <br/>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
  </body>
</html>
 