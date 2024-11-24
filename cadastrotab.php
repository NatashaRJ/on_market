<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao Banco de Dados MySql</title>
</head>
<body>
    <h1>On Market Conexão com Banco de Dados MySql</h1>
    <?php
        require_once 'conexao.php';
   
        $conn = conectaPDO();
        $stmt = $conn->prepare('SELECT * FROM cadastro');

        // Verifica se a execução foi bem-sucedida
        if (!$stmt->execute()) {
            echo "Erro ao executar a consulta: " . implode(", ", $stmt->errorInfo());
        }
        echo '<div class="cadastro"><h1> Tabela de Cadastro</h1>';
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td><strong>Id_cad</strong></td>";
        echo "<td><strong>Nome</strong></td>";
        echo "<td><strong>Data_Nascimento</strong></td>";
        echo "<td><strong>Sexo</strong></td>";
        echo "<td><strong>Nome_Materno</strong></td>";
        echo "<td><strong>CPF</strong></td>";
        echo "<td><strong>E-Mail</strong></td>";
        echo "<td><strong>Telefone_Celular</strong></td>";
        echo "<td><strong>Telefone_Fixo</strong></td>";
        echo "<td><strong>Endereço</strong></td>";
        echo "<td><strong>CEP</strong></td>";
        echo "<td><strong>Cidade</strong></td>";
        echo "<td><strong>Login</strong></td>";
        echo "<td><strong>Senha</strong></td>";
        echo "<td><strong>Nível_Acesso</strong></td>";
        echo "<td><strong>Data_Cadastro</strong></td>";
        echo "</tr>";
        echo "</div>";

        while($registro = $stmt->fetch()) {
            echo '<div class="cadastro">';
            echo "<tr>";
            echo "<td>".$registro["id_cad"] . "</td>" .
                 "<td>".$registro["nome"] . "</td>" .
                 "<td>".$registro["data_nascimento"] . "</td>" .
                 "<td>".$registro["sexo"] . "</td>" .
                 "<td>".$registro["nome_materno"] . "</td>" .
                 "<td>".$registro["cpf"] . "</td>" .
                 "<td>".$registro["email"] . "</td>" .
                 "<td>".$registro["telefone_celular"] . "</td>" .
                 "<td>".$registro["telefone_fixo"] . "</td>" .
                 "<td>".$registro["endereco"] . "</td>" .
                 "<td>".$registro["cep"] . "</td>" .
                 "<td>".$registro["cidade"] . "</td>" .
                 "<td>".$registro["login"] . "</td>" .
                 "<td>".$registro["senha"] . "</td>" .
                 "<td>".$registro["nivel_acesso"] . "</td>" .
                 "<td>".$registro["data_cadastro"] . "</td>" ;
            echo "</tr>";
            echo "</div>";
        }

        echo "</table>";
        require 'BD/login.php'
    ?>
</body>
</html>
