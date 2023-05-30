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
          $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
          $idade = date("Y") - $ano;
          echo "Você nasceu em $ano e tem $idade anos de idade!<br/>";
          if ($idade >= 18) {
            $v = "já pode votar";
            $d = "já pode dirigir";
          }else {
            $v = "não pode votar";
            $d = "não pode dirigir";
          }
          echo "Você $v e $d!";
        ?>
    </div>
  </body>
</html>
 