<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>ex2</title>
  </head>
  <body>
    <?php
     $mail = $_GET['mail'];

     if (strpos($mail, "@") && strpos($mail, ".")) {
       echo "<div class='success'>" . "ok" . "</div>";
     }else {
       echo "<div class='failed'>" . "ko" . "</div>";
     }
     ?>
  </body>
</html>
