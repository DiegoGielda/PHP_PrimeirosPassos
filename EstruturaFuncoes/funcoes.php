<html>
<head>
    <meta charset="UTF-8">
    <title>Arquivo com funções PHP</title>
</head>
<body>
    <?php
        function diferencaValores($valor01, $valor02){
            if ($valor01 < $valor02) {
                return ($valor02 - $valor01);
            } else {
                return ($valor01 - $valor02);
            }
        }
    ?>
</body>
</html>