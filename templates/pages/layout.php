<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View</title>
  <link rel="stylesheet" href="public/style.css">
</head>

<body>
  <div class="container">
    <nav class="nav">
      <ul class="menu">
        <li><button><a href="?action=home">Home</a></button></li>
        <li><button><a href="?action=option1">Option1</a></button></li>
        <li><button><a href="?action=option2">Option2</a></button></li>
        <li><button><a href="?action=option3">Option3</a></button></li>
        <li><button><a href="?action=option4">Option4</a></button></li>
      </ul>
    </nav>
    <div>
      <?php

      require_once("templates/pages/$page.php");

      ?>
    </div>


  </div>


</body>

</html>