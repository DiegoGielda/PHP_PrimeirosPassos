<html>

<head>
    <title>Verificar numero é primo</title>
</head>

<body>
    <?php
    $numeroPrimo = $_GET['edtNumeroPrimo'];

    echo "Analisando o número $numeroPrimo ...<br>";
    echo "Valores múltiplos:";
    $totalDeDivisao = 0;
    for ($lContador = 1; $lContador <= $numeroPrimo; $lContador++) {

        if ($numeroPrimo % $lContador === 0) {
            echo " $lContador";
            $totalDeDivisao++;
        }
    }
    echo "<br>Total de múltiplos: $totalDeDivisao";
    if ($totalDeDivisao <= 2) {
        echo "<br>Resultado: $numeroPrimo É PRIMO";
    } else {
        echo "<br>Resultado: $numeroPrimo NÃO É PRIMO";
    }
    ?>
    <br><br>
    <a href="javascript:history.go(-1)">Voltar a página principal</a>
</body>

</html>