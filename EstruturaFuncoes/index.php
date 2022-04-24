<html>

<head>
    <title>Funções no PHP</title>
</head>

<body>

<?php
    function imprimirNaTela($texto){
        echo "$texto";
    }

    imprimirNaTela("<h1>Trabalhando com FUNÇÕES<br></h1>");

    function somarNumerosDefinidos($valor01, $valor02){
        return ($valor01 + $valor02);
    }

    echo "A soma dos valores é: ".somarNumerosDefinidos(14, 7);

    function somarNumeros(){
        $numeroTotalParametros = func_num_args();
        $valorDosParametrosArray = func_get_args();

        echo "<br>Foi passado $numeroTotalParametros parâmetros!<br>";
        echo "O valor dos parâmetros é ";
        print_r($valorDosParametrosArray);

        $retornoSoma = 0;
        for ($lContador = 0; $lContador < $numeroTotalParametros; $lContador++) {
            $retornoSoma += $valorDosParametrosArray[$lContador];
        }
        return $retornoSoma;
    }
    echo "<br> A soma dos valores é: ".somarNumeros(14, 7, 5, 4);
    

    function passagemPorReferencia(&$pAddImposto){
        $pAddImposto = $pAddImposto + ($pAddImposto *0.10);  
    }

    // Adicionar valor de imposto ao produto.
    $valorDoProduto = 500.00;
    echo "Valor do produto antes da função $valorDoProduto<br>";

    passagemPorReferencia($valorDoProduto);

    echo "Valor do produto depois da função $valorDoProduto<br>";

    

    function valorPadrao($pParametroSemValorPadrao, $pParametroComValorPadrao = 12){
        echo "Valor passado no parâmetro foi: $pParametroSemValorPadrao<br>";
        echo "Valor padrão para o parâmetro foi: $pParametroComValorPadrao";
    }

    valorPadrao(11);

    echo "<br><br>";

    // include('funcoes.php')
    require 'funcoes.php';

    echo "A diferença entre 1 e 5 é: ".diferencaValores(1, 5);

?>

</body>

</html>