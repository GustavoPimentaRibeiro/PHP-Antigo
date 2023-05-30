<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
  </head>
  <body>
    <div>
        <pre>
            <?php
                $v = array("A", "M", "J", "X", "K");
                print_r($v);
                sort($v);
                print_r($v);
                rsort($v);
                print_r($v);
                asort($v);
                print_r($v);
                arsort($v);
                print_r($v);

                $c = array(2=>"A", 5=>"M", 0=>"J", 3=>"X", 4=>"K");
                ksort($c);
                print_r($c);
                krsort($c);
                print_r($c);
            ?>
        </pre>
    </div>
  </body>
</html>
 