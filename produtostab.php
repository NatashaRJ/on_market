<?php
        $conn = conectaPDO();
        $stmt = $conn->prepare('SELECT * FROM Produtos');
        $stmt-> execute();
        echo '<div class="produtos"><h1> Tabela Produtos</h1>';
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td><strong>Id_prod</strong></td>";
        echo "<td><strong>Nome</strong></td>";
        echo "<td><strong>Valor</strong></td>";
        echo "<td><strong>Fornecedor</strong></td>";
        echo "<td><strong>Modelo</strong></td>";
        echo "<td><strong>Sit</strong></td>";
        echo "</tr>";
        echo "</div>";

        while($registro = $stmt->fetch()) {
            echo '<div class="produtos">';
            echo "<tr>";
            echo "<td>".$registro["id_prod"] . "</td>" .
                 "<td>".$registro["nome"] . "</td>" .
                 "<td>".$registro["valor"] . "</td>" .
                 "<td>".$registro["fornecedor"] . "</td>" .
                 "<td>".$registro["modelo"] . "</td>" .
                 "<td>".$registro["sit"] . "</td>" ;
            echo "</tr>";
            echo "</div>";
        }
        echo "</table>";
        require_once "pedido.php";
    ?>