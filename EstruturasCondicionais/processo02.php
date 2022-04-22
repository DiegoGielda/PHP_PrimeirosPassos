<html>
    <head>
        <meta charset="UTF-8">
        <title>Verificar dia de semana</title>
    </head>
    <body>
        <?php

            $diaDaSemana = $_GET['codigoDia'];

            switch($diaDaSemana){
                case 1 :
                case 2 :
                case 3 :
                case 4 :
                case 5 : {
                    echo "Dia de Semana!";
                    break;
                }
                case 6 :
                case 7 : {
                    echo "Final de Semana!";
                    break;
                }
                default : {
                    echo "Informe um numero valido!";
                }
            }
        ?>
        <br>
        <a href="index.html">Voltar para a página principal</a>
    </body>
</html>