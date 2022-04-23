<html>

<head>
    <meta charset="UTF-8">
    <title>Estruturas de Repetição</title>
</head>

<body>
    <h3>Trabalhando com While</h3>
    <div class="while">
        <form method="get" action="processoWhile.php">
            <p>1. Replicar campos de input na tela.</p>
            <p>
                <label for="quantidadeDeVezes">Quantidade de Input criados: </label>
                <input type="number" max="10" min="0" value="1" name="quantidadeDeVezes" id="qtVezes">
            </p>
            <p>
                <input type="submit" value="Processar">
            </p>
        </form>
        <br>

        <form method="get" action="contadorWhile.php">
            <p>2. Criar um contador personalizado.</p>
            <p>
                <label for="contadorInicio" name="lblContadorInicio">Inicio: </label>
                <input type="number" name="contadorInicio" max="1000" min="0" value="0">
            </p>
            <p>
                <label for="contadorFinal" name="lblContadorFinal">Final: </label>
                <input type="number" name="contadorFinal" max="1000" min="0" value="0">
            </p>
            <p>
                <label for="edtIncremento" name="lblIncremento">Incremento:</label>
                <select name="numeroIncremento">
                    <?php
                    $lContador = 1;
                    while ($lContador <= 10) {
                        echo "<option value='$lContador'>$lContador</option>";
                        $lContador++;
                    }
                    ?>
                </select>
            </p>
            <input type="submit" value="Executar">
        </form>
    </div>
    <br>
    <h3>Trabalhando com Do-While</h3>
    <div class="Do-While">
        <form method="get" action="fatorialDoWhile.php">
            <p>1. Realizar o fatorial de um número.</p>
            <p>
                <label for="edtNumeroFatorial" name="lblNumeroFatorial">Indique o numero:</label>
                <input type="number" name="edtNumeroFatorial" max="100" min="0" value="1">
            </p>
            <input type="submit" value="Processar número para fatorial">
        </form>
    </div>
    <br>
    <h3>Trabalhando com For</h3>
    <div class="For">
        <form method="get" action="numeroPrimoFor.php">
            <p>1. Verificar se o número informado é primo.</p>
            <p>
                <label for="edtNumeroPrimo" name="lblNumeroPrimo">Informa o número a ser verificado:</label>
                <input type="number" name="edtNumeroPrimo" max="1000" min="0" value="1">
            </p>
            <input type="submit" value="Verificar numero">
        </form>
        <br>
        <form method="get" action="tabuadaFor.php">
            <p>2. Demonstrar a tabuada até 10 de determinado número</p>
            <p>
                <label for="edtNumeroTabuada" name="lblNumeroTabuada">Informe o número que deseja calcular a tabuada</label>
                <select name="edtNumeroTabuada">
                    <?php
                    for ($lContador = 1; $lContador <= 10; $lContador++) {
                        echo "<option value='$lContador'>$lContador</option>";
                    }
                    ?>
                </select>
            </p>
            <input type="submit" value="Processar tabuada">
        </form>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>

</html>