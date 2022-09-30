<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1 PHP Dasar</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <form method="post" class="input-form">
    <input type="text" name="stringInput" class="input" placeholder="Masukkan string:"><br>
    <input type="number" name="loopNumber" class="input" placeholder="Berapa banyak loop:"><br>
    <input type="submit" value="Submit" class="button">

    <ul class="suggestions">
      <?php
      $loopNumber = $_POST["loopNumber"];
      $stringInput = $_POST["stringInput"];

      if (!is_null($loopNumber) && !is_null($stringInput)) {

        for ($i = 1; $i <= $loopNumber; $i++) {
          printf("<li>%s %d</li>", $stringInput, $i);
        }

        if ($loopNumber % 2 == 0) {
          $jenisAngka = "Genap";
        } else {
          $jenisAngka = "Ganjil";
        }
        printf("<li>%d merupakan Bilangan %s</li>", $loopNumber, $jenisAngka);
      }
      ?>
    </ul>
  </form>

</html>


</body>

</html>