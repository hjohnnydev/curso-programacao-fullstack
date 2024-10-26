<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>

<?php
$valorInicialUm = 0;
$valorInicialDois = 0;

if (isset($_GET['valorUm'])) {
    $valorInicialUm = $_GET['valorUm'];
}

if (isset($_GET['valorDois'])) {
    $valorInicialDois = $_GET['valorDois'];
}
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        flex-direction: column;
    }
    form {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        margin-bottom: 20px;
    }
    input[type="number"], select {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"] {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
    input[type="submit"]:hover {
        background-color: #218838;
    }
    h2 {
        text-align: center;
        color: #333;
    }
    .resultado {
        background: #e7f3fe;
        color: #31708f;
        border: 1px solid #b3e5fc;
        padding: 10px;
        border-radius: 4px;
        width: 300px;
        margin-top: 20px;
        text-align: center;
    }
</style>

<form action="calculadora.php" method="GET">
    <h2>Calculadora</h2>
    <label for="valorUm">Valor 1:</label>
    <input type="number" name="valorUm" id="valorUm" value="<?php echo $valorInicialUm; ?>">
    
    <label for="valorDois">Valor 2:</label>
    <input type="number" name="valorDois" id="valorDois" value="<?php echo $valorInicialDois; ?>">
    
    <label for="operacao">Operação:</label>
    <select name="operacao" id="operacao">
        <option value="todasOperacoes">Todas operações</option>
        <option value="somar">Somar</option>
        <option value="subtrair">Subtrair</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>
    
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($_GET['valorUm']) && isset($_GET['valorDois']) && isset($_GET['operacao'])) {
    $valorUm = $_GET['valorUm'];
    $valorDois = $_GET['valorDois'];
    $operacao = $_GET['operacao'];

    $resultado = 0;

    if ($operacao == 'todasOperacoes') {
        $soma = $valorUm + $valorDois;
        $subtracao = $valorUm - $valorDois;
        $multiplicacao = $valorUm * $valorDois;

        if ($valorDois == 0) {
            $divisao = 'Não é possível dividir por zero';
        } else {
            $divisao = $valorUm / $valorDois;
        }

        $resultado = "Soma: $soma <br>Subtração: $subtracao <br>Multiplicação: $multiplicacao <br>Divisão: $divisao";
    } elseif ($operacao == 'somar') {
        $resultado = $valorUm + $valorDois;
    } elseif ($operacao == 'subtrair') {
        $resultado = $valorUm - $valorDois;
    } elseif ($operacao == 'multiplicar') {
        $resultado = $valorUm * $valorDois;
    } elseif ($operacao == 'dividir') {
        if ($valorDois == 0) {
            $resultado = 'Não é possível dividir por zero';
        } else {
            $resultado = $valorUm / $valorDois;
        }
    }
    
    echo "<div class='resultado'>";
    echo "Valor 1: $valorUm <br>Valor 2: $valorDois <br><br>";
    echo $resultado;
    echo "</div>";
}
?>
