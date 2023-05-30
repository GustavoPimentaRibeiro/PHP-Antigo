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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2) / 2;
        echo "O aluno teve média de $m com as notas $nota1 e $nota2";
        $r = ($m >= 7) ? "APROVADO" : "REPROVADO";
        echo "<br/>Desta forma, o aluno foi $r";
      ?>
    </div>
  </body>
</html>
 