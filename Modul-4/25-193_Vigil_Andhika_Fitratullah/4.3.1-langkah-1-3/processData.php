<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Posted data</title>
  <style>body { font-family: Arial, Helvetica, sans-serif; margin: 20px; }</style>
</head>
<body>
  <?php
  require 'validate.inc';
  if (validateName($_POST, 'surname'))
      echo 'Data OK!';
  else
      echo 'Data invalid!';
  ?>
  <h3>Posted data: </h3>
  <?php
  foreach ($_POST as $key => $value)
      echo "($key) => (" . htmlspecialchars($value) . ")<br/>";
  ?>
</body>
</html>
