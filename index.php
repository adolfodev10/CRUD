<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            text-align: center;
        }
        table th {
            background-color: #f2f2f2;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .action-links a {
            text-decoration: none;
            color: blue;
            margin-right: 5px;
        }
        .action-links a:hover {
            text-decoration: underline;
        }
        input{
            padding:5px;
            border-radius:5px;
            border:1px solid;
            border-color:blueviolet;
            outline:none;
        }
        button{
            background-color:blueviolet;
            border:none;
            color:white;
            border-radius:10px;
            padding:8px;
            cursor:pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Lista de Produtos</h2>
        <form action="create.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="preco">Preco:</label>
            <input type="number" min="0" id="preco" name="preco" required>
            <label for="categoria">Categoria:</label>
            <input type="categoria" id="categoria" name="categoria" required>
            <button type="submit">Adicionar</button>
        </form>
        <h2>Tabela</h2>
        <table>
            <tr>
            </tr>
            <?php include 'read.php'; ?>
        </table>
    </div>
</body>
</html>
