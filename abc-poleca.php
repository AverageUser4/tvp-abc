<!DOCTYPE html>

<html lang="pl">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABC Poleca | TVP ABC</title>
  <link rel="stylesheet" href="css/abc-poleca-main.css">
  <script type="module" src="js/abc-poleca-main.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

  <?php 
    echo file_get_contents('components/website-header.html');
  ?>

  <main class="main-part main-part--pushed-background-image">

    <div class="website-content website-content--medium">

      <h1 class="heading heading--color-2 heading--small-to-big">ABC Poleca</h1>

      <ul class="horizontal-list">

        <li><a class="link button button--block button--thin">Książki</a></li>
        <li><a class="link button button--block button--thin button--color-2">Gry</a></li>
        <li><a class="link button button--block button--thin button--color-2">Płyty</a></li>
        <li><a class="link button button--block button--thin button--color-2">Nasze publikacje</a></li>
        <li><a class="link button button--block button--thin button--color-2">Wydarzenia</a></li>

      </ul>

      <a class="standalone-section background-blur-effect link">

        <img class="background-blur-effect__background-image" src="images/misc/abc-recommends.jpg">

        <img class="background-blur-effect__front-image" src="images/misc/abc-recommends.jpg">

        <div class="background-blur-effect__text">

          <h3 class="heading heading--no-margin-top">"Prezent z nieba. 12 historii od przyjaciela"</h3>

          <p class="paragraph paragraph--no-margin paragraph--medium">
            Jeśli poszukujecie książki do czytania z dziećmi w jesienne wieczory,
            która pomoże Wam umówić z nimi ważne problemy, Prezent z nieba. 12 historii od przyjaciela
            Hanny Sołtysiak może okazać się idealną lekturą.
          </p>

        </div>

      </a>
      
      <section class="standalone-section">

        <ul class="info-grid">

          <?php echo str_repeat(file_get_contents('components/template-info-boxes.html'), 2); ?>

        </ul>

        <div class="pagination">

          <span class="pagination__button pagination__button--inactive">1</span>
          <a class="pagination__button">2</a>
          <a class="pagination__button">3</a>
          <span class="pagination__button pagination__button--unusable">...</span>
          <a class="pagination__button">24</a>
          <a class="pagination__button  pagination__arrow-button"></a>

        </div>
       
      </section>

    </div>

  </main>

  <?php echo file_get_contents('components/website-footer.html'); ?>

</body>

</html>