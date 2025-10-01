<?php
    include("config.php");
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO produto (nome, preco,categoria) VALUES ('$nome', '$preco','$categoria')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
