<?php
     function tabelaRows($row){
        echo "<tr>";
        echo "<td>";
        echo $row["id"];
        echo "</td>";
        echo "<td>";
        echo $row["nome"];
        echo "</td>";
        echo "<td>";
        echo $row["email"];
        echo "</td>";
        echo "<td>";
        echo data($row["dt_nascimento"]);
        echo "</td>";
        echo "<td class='deletar'>";
        echo "<a href='./cadastro/deletarCadastro.php?id=".$row["id"]."'>";
        echo "deletar";
        echo "<a>";
        echo "</td>";
        echo "</tr>";
    }