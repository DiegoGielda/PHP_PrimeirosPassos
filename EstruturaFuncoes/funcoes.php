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

        function comTipoDeParametroDefinido(string $texto, int $numero, float $numeroDecimal, Array $tipoComposto){

            echo "Trabalhando com tipos definidos nos parametros. $texto $numero $numeroDecimal $tipoComposto";

        }

        function comTipoDeRetornoDefinido(string $texto): int {

            echo "Trabalhando com tipos definidos nos parametros. $texto";
            return 12;
            
        }

    ?>
</body>
</html>