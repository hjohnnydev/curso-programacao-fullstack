<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Backend</title>
</head>
<body>
    <h1>Introdução à programação backend</h1>

    <?php
        echo "Ola Johnny";

        echo '<br/>';
        
        // cria uma variavel ano_nascimeno
        $ano_nascimento = 1997;
        // cria uma variavel ano_atual, que armazena o ano que estamos
        $ano_atual = 2024;
        
        // cria uma variavel para armazenar a idade da pessoa,
        // realizamos um calculo de subtração entre o ano atual e o ano de nascimento
        $idade = $ano_atual - $ano_nascimento;

        // Exibimos a idade da pessoa
        // No PHP, o caractere ponto "." concatena (junta) strings.
        echo "Você possui " . $idade . " anos.";

    ?>

    </br>
    <a href="formulario.php">Ir para o formulário</a>
    </br>
    <a href="calculadora.php">Ir para o calculadora</a>

</body>
</html>