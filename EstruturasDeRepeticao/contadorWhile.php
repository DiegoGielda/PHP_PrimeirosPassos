<html>
<head>
    <title>Contador personalizado em While</title>
</head>
<body>
    <?php
        $contadorInicio = $_GET['contadorInicio'];
        $contadorFinal = $_GET['contadorFinal'];
        $valorIntervalo = $_GET['numeroIncremento'];

        if ($contadorInicio <= $contadorFinal) {
            while ($contadorInicio <= $contadorFinal) {
                echo "$contadorInicio ";
                $contadorInicio += $valorIntervalo;
            }
        } else {
            while ($contadorInicio >= $contadorFinal) {
                echo "$contadorInicio ";
                $contadorInicio -= $valorIntervalo;
            }            
        }
    ?>
    <br><a href="javascript:history.go(-1)">Voltar a página principal</a> 
</body>
</html>