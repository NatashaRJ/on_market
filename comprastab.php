<?php
        $conn = conectaPDO();
        $stmt = $conn->prepare('SELECT * FROM Compras');
        $stmt-> execute();
        echo '<div class="compras"><h1> Tabela Compras</h1>';
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td><strong>Id_prod</strong></td>";
        echo "<td><strong>Quantidade</strong></td>";
        echo "<td><strong>Id_ped</strong></td>";
        echo "</tr>";
        echo "</div>";

        while($registro = $stmt->fetch()) {
            echo '<div class="compras">';
            echo "<tr>";
            echo "<td>".$registro["id_prod"] . "</td>" .
                 "<td>".$registro["quantidade"] . "</td>" .
                 "<td>".$registro["id_ped"] . "</td>" ;
            echo "</tr>";
            echo "</div>";
        }
        echo "</table>";
        require_once "nota_fiscal.php";
    ?>