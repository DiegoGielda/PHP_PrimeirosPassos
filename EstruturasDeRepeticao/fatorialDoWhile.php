<html>
<head>
    <meta charset="UTF-8">
    <title>Processar Fatorial de um número</title>
</head>
<body>
    <?php
    $numero = $_GET['edtNumeroFatorial'];
    $fatorialDoNumero = 1;
    $lContador = 1;

    do {
        $fatorialDoNumero *= $lContador;
        $lContador++;
    } while ($lContador <= $numero);
    
    echo "Fatorial de $numero! é: $fatorialDoNumero";
    ?>
    <br>
    <a href="javascript:history.go(-1)">Voltar a página principal</a>
</body>
</html>