<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $name = "Temidayo";
  // some string functions

  // length of the string
  echo "<br/>";
  echo strlen($name);
  echo "<br/>";
  // uppercase of the string
  echo strtoupper("$name");
  echo "<br/>";

  // lowercase of the string
  echo strtolower("$name");
  echo "<br/>";


  // access character with index;
  echo $name[0];

  echo "<br/>";

  // Strings were non mutable in js meaning you couldn't change a particular character of the string but apparentlly not so in php land
  $name[0] = "L";

  echo $name;
  echo "<br/>";
  echo $name[0];
  echo "<br/>";

  // replace a particular string
  // takes three arguments: 1) Sequence of characters to replace. 2) What to replace it with. 3) In what string should you replace it

  echo str_replace("Lemi", "Oluwa", $name);
  echo "<br/>";

  // Get a particular substring from a string
  echo substr($name,  5);
  ?>
</body>

</html>