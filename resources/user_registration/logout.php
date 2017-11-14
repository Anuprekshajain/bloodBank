<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Thanks</title>
  <?php include '../../public/assets/css/css.html'; ?>
</head>

<body>
  <style>
  body{
        background: url('../../public/assets/img/b12.jpg') no-repeat center fixed;
  background-size: cover;
    }
  </style>
    <div class="form">
          <h1>Thanks for stopping by</h1>

          <p><?= 'You have been logged out!'; ?></p>

          <a href="../../public/main.php"><button class="button button-block"/>Home</button></a>

    </div>
</body>
</html>
