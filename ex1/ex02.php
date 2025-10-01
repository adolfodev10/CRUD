<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
  </head>
  <body>
     <form method="post">
        <input type="number" name="num1" required>
        <input type="number" name="num2" required>
        <input type="submit" value="Calcular">
     </form>
     <?php
      function saoAnagramas($num1, $num2){

         $str1 = strval($num1);
         $str2 = strval($num2);

         if (strlen($str1) !== strlen($str2)) {
          return false;
      }
      $array1 = str_split($str1);
      $array2 = str_split($str2);

      sort($array1);
      sort($array2);
      return $array1 === $array2;
    } 
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];

      if (saoAnagramas($num1, $num2)) {
        echo "$num1 e $num2 são anagramas.";
    } else {
        echo "$num1 e $num2 não são anagramas.";
    }
    ?>
  </body>
  </html>
