<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testing Components...</title>
  <link rel="stylesheet" href="css/home-main.css">
  <script type="module" src="js/home-main.js"></script>

</head>

<body>

  <!-- <div style="height:100px"></div> -->

  <?php 
    echo file_get_contents('components/now-on-air.html');
  ?>

</body>

</html>