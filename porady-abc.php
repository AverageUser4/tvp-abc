<!DOCTYPE html>

<html lang="pl">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Porady | TVP ABC</title>
  <link rel="stylesheet" href="css/porady-abc-main.css">
  <script type="module" src="js/porady-abc-main.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

  <?php 
    echo file_get_contents('components/website-header.html');
  ?>

  <main class="main-part main-part--pushed-background-image">

    <div class="website-content website-content--thin">

      <h1 class="heading heading--color-2 heading--small-to-big">Porady ABC</h1>

      <ul class="horizontal-list">

        <li><a class="link button button--block button--thin button--color-2">e-MOCje</a></li>
        <li><a class="link button button--block button--thin">Od niemowlaka do przedszkolaka</a></li>
        <li><a class="link button button--block button--thin">Moda na rodzinę</a></li>
        <li><a class="link button button--block button--thin">Porady dla rodziców</a></li>

      </ul>
      
      <section class="standalone-section">

        <ul class="info-grid">

          <?php echo str_repeat(file_get_contents('components/template-info-boxes.html'), 2); ?>

        </ul>

        <div class="pagination">

          <span class="pagination__button pagination__button--inactive">1</span>
          <a class="pagination__button">2</a>
          <a class="pagination__button">3</a>
          <a class="pagination__button">4</a>
          <a class="pagination__button  pagination__arrow-button"></a>

        </div>
       

      </section>

    </div>

  </main>

  <?php echo file_get_contents('components/website-footer.html'); ?>

</body>

</html>