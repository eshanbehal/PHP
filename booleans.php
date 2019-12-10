<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Variables
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://unpkg.com/ionicons@4.4.4/dist/css/ionicons.min.css" rel="stylesheet">
    <style>
      h1{
        color: purple;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <h1>Booleans: </h1>
      <?php
$booleanvariable1 = (5>6);
$booleanvariable2 = (5>4);
$booleanvariable3 = $booleanvariable1 && $booleanvariable2;
$booleanvariable4 = $booleanvariable1 || $booleanvariable2;
var_dump($booleanvariable1);
var_dump($booleanvariable2);
var_dump($booleanvariable3);
var_dump($booleanvariable4);
var_dump(!$booleanvariable1);
       ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </body>
</html>
