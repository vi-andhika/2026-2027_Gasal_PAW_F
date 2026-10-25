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
  $errors = array();
  validateName($errors, $_POST, 'surname');
  if ($errors)
  {
      echo 'Errors:<br/>';
      foreach ($errors as $field => $error)
          echo "$field $error<br/>";
  }
  else
      echo 'Data OK!';
  ?>
  <h3>Posted data: </h3>
  <?php
  foreach ($_POST as $key => $value)
      echo "($key) => (" . htmlspecialchars($value) . ")<br/>";
  ?>
</body>
</html>
