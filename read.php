<style>
    table {
            width: 100%;
            border:1px solid #ccc;
           text-align:end;
        }
         table td {
            text-align: end;
            
        }
        table th {
            background-color: #f2f2f2;
           text-align:center;
        }
       
</style>
<table>
            <tr>
                <th>Nome</th>
                <th>Preco</th>
                <th>Categoria</th>
                <th>Acções</th>
            </tr>
        </table>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

$conn = new  mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão Falhou: " . $conn->connect_error);
}
$sql = "SELECT * FROM produto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<table>';
        echo "<tr>";
        echo "<td>".$row["nome"]."</td>";
        echo "<td>".$row["preco"]."</td>";
        echo "<td>".$row["categoria"]."</td>";
        echo "<td class='action-links'>
        <a href='update.php?id=".$row["id"]."'>Update</a> | <a href='delete.php?id=".$row["id"]."'>Delete</a></td>";
        echo "</tr>";
        echo "</table>";
    }
} else {
    echo "<tr>
        <td colspan='4'>Nenhum usuário encontrado</td>
        </tr>";
}
$conn->close();
?>
