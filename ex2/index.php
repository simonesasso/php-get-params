<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
     $mail = $_GET['mail'];

     if (strpos($mail, "@") && strpos($mail, ".")) {
       echo "ok";
     }else {
       echo "ko";
     }
     ?>
  </body>
</html>
