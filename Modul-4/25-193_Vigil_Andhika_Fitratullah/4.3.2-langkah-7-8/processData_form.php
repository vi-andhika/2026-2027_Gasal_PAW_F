<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <style>
    body { 
      font-family: Arial, Helvetica, sans-serif; margin: 20px; 
    }
    fieldset { 
      background: #dcdcfa; border: 1px solid #7a7ac0; width: 430px; padding: 10px 14px; 
    }
    legend { 
      font-weight: bold; 
    }
    .field { 
      display: flex; align-items: flex-start; margin: 4px 0; 
    }
    .field > label:first-child { 
      width: 120px; text-align: right; padding-right: 10px; font-size: 13px; 
    }
    .field label.inline { 
      font-size: 13px; margin-right: 8px; 
    }
  </style>
</head>
<body>
  <h1>Register</h1>
  <?php
  $errors = array();
  if (isset($_POST['surname']))
  {
      require 'validate.inc';
      validateName($errors, $_POST, 'surname');
      if ($errors)
      {
          echo '<h1>Invalid, correct the following errors:</h1>';
          foreach ($errors as $field => $error)
              echo "$field $error<br/>";

          include 'form.inc';
      }
      else
      {
          echo 'Form submitted successfully with no errors';
      }
  }
  else
  {
      include 'form.inc';
  }
  ?>
</body>
</html>
