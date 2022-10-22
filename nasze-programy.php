<!DOCTYPE html>

<html lang="pl">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TVP ABC</title>
  <link rel="stylesheet" href="css/nasze-programy-main.css">
  <script type="module" src="js/nasze-programy-main.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

  <?php 
    echo file_get_contents('components/website-header.html');
  ?>

  <main class="main-part main-part--pushed-background-image">

    <div class="website-content website-content--medium">

      <h1 class="heading heading--color-2 heading--small-to-big">Nasze programy</h1>

      <a class="background-blur-effect link">

        <img class="background-blur-effect__background-image" src="images/misc/our-programs-1.jpg">

        <img class="background-blur-effect__front-image" src="images/misc/our-programs-1.jpg">

        <div class="background-blur-effect__text">

          <h3 class="heading heading--no-margin-top">Mrówki górują! Sekretne życie roślin</h3>

          <p class="paragraph paragraph--no-margin paragraph--medium">
            Świat przyrody, który nas otacza, kryje wiele tajemnic.
            Rozejrzymy się wokół, by odkryć przed widzem rzeczy proste i niezwykłe zarazem.
          </p>

        </div>

      </a>
      
      <section class="standalone-section">

        <ul class="info-grid">

          <?php echo str_repeat(file_get_contents('components/template-info-boxes.html'), 2); ?>

        </ul>

        <div class="pagination">

          <span class="pagination-button">1</span>
          <a class="pagination-button">2</a>
          <a class="pagination-button"></a>

        </div>
       

      </section>

    </div>

  </main>

  <?php echo file_get_contents('components/website-footer.html'); ?>

</body>

</html>