<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form method="post">
        <input type="text" name="frase" id="frase" required>
        <button type="submit">Mostrar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        function RemoverAcentos($string){
            return iconv('UTF-8', 'ASCII//TRANSLIT', $string);
            $fraseSemAcentos =  strtr($string,$frase);
        }
                if(isset($_POST['frase'])){
                     $frase = $_POST['frase'];
                     $fraseSemAcentos = RemoverAcentos($frase);
                     echo "Frase Original:$frase<br>";
                    echo "Frase sem acento :$fraseSemAcentos";
                }
                else{
                    echo "Não tem como remover acento";
        }
    }
    ?>
</body>
</html>