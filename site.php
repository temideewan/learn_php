<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    form {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      row-gap: 10px;
    }
  </style>
</head>

<body>
  <form action="site.php" method="get">
    <label for="name">First Num:</label> <input id="name" type="text" name="userName">
    <label for="Age">Second Num:</label> <input id="Age" type="text" name="userAge">

    <button type="submit">Submit</button>
  </form>
  <br />
  Your name is <?php
                $userName = $_GET['userName'];

                echo strtoupper($userName);
                ?>
  <br />
  Your age is <?php
              $userAge = $_GET['userAge'];

              echo $userAge;
              ?>

</body>

</html>