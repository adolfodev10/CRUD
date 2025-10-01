<!DOCTYPE html>
<html>
<head>
    <title>Exibição de Dados do Banco de Dados</title>
</head>
<body>

<h2>Dados da Tabela</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Nivel</th>
    </tr>
    <?php
    // Conexão com o banco de dados (substitua os valores pelos seus)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "crud";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verifica se a conexão foi estabelecida corretamente
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Consulta SQL para selecionar os dados da tabela
    $sql = "SELECT id, nome, preco,categoria FROM produto";
    $result = $conn->query($sql);

    // Verifica se há resultados e os exibe na tabela
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["nome"]."</td>";
            echo "<td>".$row["preco"]."</td>";
            echo "<td>".$row["categoria"]."</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>
