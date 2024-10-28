<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Informações</title>
    <style>
        /* Estilização da página */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f6fa;
            margin: 0;
            padding: 2rem;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 1rem;
        }

        /* Estilização da tabela */
        table {
            width: 80%;
            max-width: 800px;
            border-collapse: collapse;
            margin: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr {
            background-color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #d4e9d4;
        }

        /* Adiciona um estilo de borda arredondada */
        th:first-child, td:first-child {
            border-radius: 8px 0 0 8px;
        }

        th:last-child, td:last-child {
            border-radius: 0 8px 8px 0;
        }
    </style>
</head>
<body>

    <h1>Tabela de Informações com HTML puro</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Profissão</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ana</td>
                <td>24</td>
                <td>Professora</td>
            </tr>
            <tr>
                <td>Bruno</td>
                <td>30</td>
                <td>Motorista</td>
            </tr>
            <tr>
                <td>Carlos</td>
                <td>16</td>
                <td>Estagiário</td>
            </tr>
            <tr>
                <td>Daniel</td>
                <td>45</td>
                <td>CEO</td>
            </tr>
            <tr>
                <td>Enzo</td>
                <td>16</td>
                <td>Jovem Aprendiz</td>
            </tr>
        </tbody>
    </table>


</br>
<h1>Tabela com php</h1>
<?php
$funcionarios = array(
    array("nome" => "Ana", "idade" => "24", "profissao" => "Professora"),
    array("nome" => "Bruno", "idade" => "30", "profissao" => "Motorista"),
    array("nome" => "Carlos", "idade" => "18", "profissao" => "stagiário"),
    array("nome" => "Daniel", "idade" => "45", "profissao" => "CEO"),
    array("nome" => "Enzo", "idade" => "14", "profissao" => "Jovem Aprendiz")

)



?>

</body>
</html>
