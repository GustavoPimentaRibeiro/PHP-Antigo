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
            $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 1;
            $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 1;
            $media = ($nota1 + $nota2) / 2;

            echo "A média entre <span class='foco'>$nota1</span> e <span class='foco'>$nota2</span> é igual a <span class='foco'>$media</span><br/>";

            if ($media >= 0 && $media <= 5) {
                $situacao = "REPROVADO";
            } else if ($media > 5 && $media < 7) {
                $situacao = "RECUPERAÇÃO";
            } else {
                $situacao = "APROVADO";
            }

            echo "Situação do aluno <span class='foco'>$situacao</span>";
        ?>
        <br/><br/>
        <a href="ex03.html">
          <input style="background-color:#273747; color:#ffffff; width:110px; height:35px; box-shadow: 2px 2px 0px rgba(0, 0, 0, 0.5); border: none;" type="submit" value="Voltar" /> 
        </a>
    </div>
  </body>
</html>
 