<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1 PHP Dasar</title>
</head>

<body>
  <form action="" method="post">
    <label for="stringInput">Masukkan string:</label>
    <input type="text" name="stringInput"><br>
    <label for="loopNumber">Berapa banyak perulangan:</label>
    <input type="number" name="loopNumber"><br>
    <input type="submit" value="Submit">
  </form>

  <?php
    if ($_POST) {
      $loopNumber = $_POST["loopNumber"];
      $stringInput = $_POST["stringInput"];

      for ($i=1; $i <= $loopNumber; $i++) { 
        printf("<p>%s %d</p>", $stringInput, $i);
      }

      if ($loopNumber % 2 == 0) {
        $jenisAngka = "Genap";
      }
      else {
        $jenisAngka = "Ganjil";
      }
      printf("<p>%d merupakan Bilangan %s</p>", $loopNumber, $jenisAngka);
    }
  ?>
</body>

</html>